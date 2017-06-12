@extends( 'layouts.layout' )

@section( 'title', "Contacto" )

@section( 'content' )
        <div class="cover-interior-c"></div>

        <section class="contacto">

            <div class="title">
                <div class="container">
                    <h2>En <span>French’s&reg;</span><br>nos complace mucho tu visita.</h2>
                    <p>Si tienes una gran idea, saludo o comentario,<br>compártelo con nosotros.</p>
                </div>
            </div>

            <div class="content-form">
                <div class="container">
                    <p>Para poder responder a tu solicitud, ingresa la siguiente información:</p>
                    {!! Form::open( [
                      'route'   => 'sendContact',
                      'method'  => 'POST',
                      'files'   => false,
                      'id'      => 'contact',
                    ] ) !!}
                        <div class="left">
                            {!! Form::text( 'name', null, [
                              'placeholder'   => 'NOMBRE*',
                              'autocomplete'  => 'false',
                              'autocorrect'   => 'on',
                              'required'      => '',
                              'tabindex'      => '1',
                              'class'         => 'name',
                              'v-model.sync'  => 'newContact.name'
                            ] ) !!}
                        </div>
                        <div class="right">
                            {!! Form::email( 'email', null, [
                              'placeholder'   => 'CORREO ELECTRÓNICO*',
                              'autocomplete'  => 'false',
                              'autocorrect'   => 'on',
                              'required'      => '',
                              'tabindex'      => '2',
                              'class'         => 'email',
                              'v-model.sync'  => 'newContact.email'
                            ] ) !!}
                        </div>
                        <div class="div100">
                            {!! Form::textarea( 'comments', null, [
                              'placeholder'   => 'COMENTARIO',
                              'autocorrect'   => 'on',
                              'tabindex'      => '3',
                              'class'         => 'comments',
                              'v-model.sync'  => 'newContact.comments'
                            ] ) !!}
                        </div>
                        {!! Form::submit( 'ENVIAR', [
                          'class'               => 'boton',
                          'tabindex'            => '4',
                          'aria-role'           => 'button',
                          'v-on:click.prevent'  => 'submitContact'
                        ] ) !!}
                        <div class="alert" v-model.sync="message" v-if="send">@{{ message }}</div>
                    {!! Form::close() !!}

                </div>
            </div>

        </section>
@endsection

@section( 'scripts' )
        <script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.4/vue-resource.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script type="text/javascript">
          var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,

          contact = new Vue( {
            el      : '#contact',
            data    : {
              message       : '',
              send          : false,
              newContact    : {
                name          : '',
                email         : '',
                comments      : ''
              }
            },
            methods : {
              /**
               * Submit contact form
               * @param  Event event Event object
               */
              submitContact : function ( event ) {
                this.send         = true;

                var data          = {
                      '_token'    : $( 'input[type="hidden"]' ).val(),
                      'name'      : this.newContact.name,
                      'email'     : this.newContact.email,
                      'comments'  : this.newContact.comments,
                    },
                    contactAction = document.getElementById( 'contact' )
                                            .getAttribute( 'action' );

                if ( this.isValid ) {
                  /**
                   * Ajax call to back-end and promise handlers
                   */
                  this.$http.post( contactAction, data )
                          .then( function( response ) {
                            response = response.data;
                            if ( response.response_message === 'success' ) {
                              this.newContact.name      = '';
                              this.newContact.email     = '';
                              this.newContact.comments  = '';
                              this.message              = "¡Muchas gracias por enviarnos tus comentarios!";
                            }
                          } )
                          .catch( function( error ) {
                            this.message = 'No se pudo enviar la información.';
                          } );
                } else {
                  this.message = 'Hay un campo que no esta correctamente lleno. Por favor, revisa de nuevo.';
                }
              }
            },
            // computed property for form validation state
            computed: {
              validation: function () {
                return {
                  name      : !!this.newContact.name.trim( ),
                  email     : emailRE.test( this.newContact.email ),
                  comments  : !!this.newContact.comments.trim()
                }
              },
              isValid: function () {
                var validation = this.validation
                return Object.keys( validation ).every( function ( key ) {
                  return validation[ key ];
                } );
              }
            },
          } );
        </script>
@endsection