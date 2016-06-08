<?php

namespace Frenchs\Events;

use Frenchs\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RecipeUploaded extends Event
{
  use SerializesModels;

  public $recipes;

  /**
   * Create a new event instance.
   *
   * @return void
   */
  public function __construct( $recipes )
  {
    $this->recipes = $recipes;
  }

  /**
   * Get the channels the event should be broadcast on.
   *
   * @return array
   */
  public function broadcastOn()
  {
    return [];
  }
}
