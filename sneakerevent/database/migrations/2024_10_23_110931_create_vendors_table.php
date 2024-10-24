<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('special_status')->default(false); // Use BIT if needed
            $table->string('sell_type'); // E.g. Sneakers, Food & Drink, Kids Corner
            $table->enum('stand_type', ['A', 'AA', 'AA+']);
            $table->enum('days', ['One', 'Two']); // Assuming this refers to the days the vendor operates
            $table->string('logo')->nullable(); // Optional field for partners
            $table->boolean('is_active')->default(true);
            $table->text('remark')->nullable();
            $table->timestamps(); // This adds both `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
