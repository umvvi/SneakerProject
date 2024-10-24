<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create(['name' => 'Sneakerness Rotterdam', 'location' => 'Van Nellefabriek', 'date' => '2024-11-10']);
    }
}
