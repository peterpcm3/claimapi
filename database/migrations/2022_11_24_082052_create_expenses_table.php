<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participant_expense_id');
            $table->enum('expense_type', ['rail_fare', 'taxi_fare', 'parking', 'mileage', 'other']);
            $table->tinyText('other_description')->nullable();
            $table->decimal('amount');
            $table->enum('currency', ['USD', 'GBP']);
            $table->text('info')->nullable();
            $table->timestamps();

            $table->foreign('participant_expense_id')->references('id')->on('participant_expenses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}
