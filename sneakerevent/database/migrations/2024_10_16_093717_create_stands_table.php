<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandsTable extends Migration
{
    public function up()
    {
        Schema::create('stands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained()->onDelete('cascade');
            $table->string('stand_type'); // A, AA, AA+
            $table->decimal('price', 8, 2);
            $table->boolean('rented_status')->default(false);
            $table->boolean('is_active')->default(true);
            $table->text('comment')->nullable(); // Added comment column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stands');
    }
}
