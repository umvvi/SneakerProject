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
            $table->string('name', 28);
            $table->boolean('SpecialStatus')
                ->default(false);
            $table->enum('SellsSort', ['Sneakers', 'Food and Drinks', 'Kids Corner']);
            $table->enum('StandType', ['A', 'AA', 'AA+']);
            $table->enum('days', ['One Days', 'Two Days']);
            $table->binary('logo')
                ->nullable()
                ->default(null);
            $table->boolean('isActive')
                ->default(true);
            $table->string('Remark', 255)
                ->nullable()
                ->default(null);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
