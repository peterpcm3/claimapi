<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participant_id');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('account_holder');
            $table->enum('account_type', ['checking', 'savings']);
            $table->enum('currency', ['USD', 'GBP']);
            $table->integer('account_number')->nullable();
            $table->integer('sort_code')->nullable();
            $table->string('iban')->nullable();
            $table->string('swift')->nullable();
            $table->string('routing_number');
            $table->string('transit_number');
            $table->timestamps();

            $table->foreign('participant_id')->references('id')->on('participants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant_details');
    }
}
