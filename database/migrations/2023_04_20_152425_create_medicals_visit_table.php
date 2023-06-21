<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalsVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals_visit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('visit_date');
            $table->string('register_date');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->
            on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('medical_id')->unsigned();
            $table->foreign('medical_id')->references('id')->
            on('medicals')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('medicals_visit');
    }
}
