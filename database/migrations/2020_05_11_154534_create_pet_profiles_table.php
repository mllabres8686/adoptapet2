<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->boolean('state')->default(0);
            $table->string('img_thumbnail')->default('default_pet_image.png');
            $table->string('name', 50);
            $table->string('gender');
            $table->string('species', 30);
            $table->string('breed', 50);
            $table->date('birthdate');
            $table->boolean('sterilized');
            $table->float('weight', 5,2);
            $table->longText('description')->default('');
            $table->timestamp('adopted_at')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('pet_profiles');
    }
}
