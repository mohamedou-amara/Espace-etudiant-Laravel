<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->String('CNE');
            $table->String('CIN')->unique();
            $table->String('Nom');
            $table->String('Prenom');
            $table->String('Filiere');
            $table->String('Apogee')->unique();
            $table->String('Email')->unique();
            $table->Date('Date_De_Naissance');
            $table->String('Telephone');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
