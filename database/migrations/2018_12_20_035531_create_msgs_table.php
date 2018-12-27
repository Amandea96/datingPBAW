<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
        Schema::create('msg', function (Blueprint $table) {
            $table->increments ('id_msg');
			$table->unsignedInteger('sender');
			$table->unsignedInteger('receiver');
			$table->foreign('sender')->references('id')->on('users');
			$table->foreign('receiver')->references('id')->on('users');
			$table->string('date_msg',40); 
			$table->longText('message'); 
			
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
        Schema::dropIfExists('msg');
    }
}
