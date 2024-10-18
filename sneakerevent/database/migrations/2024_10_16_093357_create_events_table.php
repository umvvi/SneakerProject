<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('location');
            $table->integer('number_of_tickets_per_time_slot')->nullable();
            $table->integer('available_stands')->default(0);
            $table->boolean('is_active')->default(true);
            $table->text('comment')->nullable(); // Added comment column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
