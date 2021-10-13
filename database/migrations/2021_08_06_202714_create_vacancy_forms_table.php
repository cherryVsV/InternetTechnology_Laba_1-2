<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('vacancy_id')->unsigned();
            $table->foreign('vacancy_id')
                ->references('id')->on('vacancies');
            $table->string('phone');
            $table->string('email');
            $table->text('info');
            $table->string('resume');
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
        Schema::dropIfExists('vacancy_forms');
    }
}
