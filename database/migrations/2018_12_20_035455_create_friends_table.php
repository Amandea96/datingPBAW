<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
        Schema::create('friend', function (Blueprint $table) {
		$table->unsignedInteger('id_person1');
		$table->unsignedInteger('id_person2');
		
        $table->foreign('id_person1')->references('id')->on('users');
        $table->foreign('id_person2')->references('id')->on('users');
        $table->string('type',15);  
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
        Schema::dropIfExists('friend');
    }
}
