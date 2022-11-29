<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participant_id');
            $table->dateTime('site_visit_date');
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
        Schema::dropIfExists('participant_visits');
    }
}
