<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->date('birthdate');
            $table->enum('gender', ['Женский', 'Мужской']);
            $table->string('city');
            $table->json('address');
            $table->string('phone');
            $table->enum('status', ['Женат', 'Замужем', 'Не состою в браке']);
            $table->string('employment');
            $table->json('socials');
            $table->boolean('subscription');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
