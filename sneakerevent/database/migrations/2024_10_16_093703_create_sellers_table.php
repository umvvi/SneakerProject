<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('special_status')->default(false); // e.g., Partner
            $table->string('selling_type'); // e.g., Sneakers, Food and Drink, etc.
            $table->string('stand_type'); // A, AA, AA+
            $table->string('days'); // One or Two days
            $table->string('logo')->nullable(); // Optional for partners
            $table->boolean('is_active')->default(true);
            $table->text('comment')->nullable(); // Added comment column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
