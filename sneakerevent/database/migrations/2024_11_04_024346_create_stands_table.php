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
            $table->foreignId('seller_id')
            ->constrained('sellers');
            $table->enum('StandType', ['A', 'AA', 'AA+']);
            $table->decimal('price', 8, 2);
            $table->boolean('rented_status')
                ->default(false);
            $table->boolean('is_active')
                ->default(true);
            $table->text('remark')
                ->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stands');
    }
}
