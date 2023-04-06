<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{

   use RefreshDatabase;
   public function testEventDateTimeFieldIsACarbonObject()
   {
       $event = factory(\App\Models\Event::class)->make();
       $this->assertTrue(is_a($event->started_at,'Illuminate\Support\Carbon'));
   }
}
