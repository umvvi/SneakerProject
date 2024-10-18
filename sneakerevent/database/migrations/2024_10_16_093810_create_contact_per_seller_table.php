<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPerSellerTable extends Migration
{
    public function up()
    {
        // Ensure the table name is unique and accurate
        Schema::create('contact_per_sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');        // Foreign key for Seller
            $table->unsignedBigInteger('contact_person_id'); // Foreign key for Contact Person

            // Define the foreign key relationships
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->foreign('contact_person_id')->references('id')->on('contact_people')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        // Drop the table if it exists
        Schema::dropIfExists('contact_per_sellers');
    }
}
