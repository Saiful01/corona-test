<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('result_id');
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('is_pregnant')->nullable();
            $table->string('temperature')->nullable();
            $table->string('symptom')->nullable();
            $table->string('extra_symptom')->nullable();
            $table->string('disease')->nullable();
            $table->string('pre_disease')->nullable();
            $table->string('is_smoker')->nullable();
            $table->string('is_nurse')->nullable();
            $table->string('symptom_change')->nullable();
            $table->integer('score')->default(0);
            $table->string('status')->default("1");// Confirmed, Death, Isolation, Hospitalize
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
