<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
    Event::factory()->count(10)->create();
    }
}
