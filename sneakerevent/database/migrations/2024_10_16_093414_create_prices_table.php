<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 8, 2); // Add amount column
            $table->date('date');
            $table->string('time_slot'); // e.g., 11:00, 12:00, etc.
            $table->decimal('rate', 8, 2); // Keep rate if needed
            $table->boolean('is_active')->default(true);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
