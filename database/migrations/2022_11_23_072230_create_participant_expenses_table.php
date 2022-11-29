<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('study_id');
            $table->unsignedBigInteger('participant_detail_id');
            $table->unsignedBigInteger('participant_visit_id');
            $table->timestamps();

            $table->foreign('participant_detail_id')->references('id')->on('participant_details');
            $table->foreign('participant_visit_id')->references('id')->on('participant_visits');
            $table->foreign('study_id')->references('id')->on('studies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant_expenses');
    }
}
