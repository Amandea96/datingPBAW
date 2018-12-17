<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonEditForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('person', function (Blueprint $table) {
            $table->increments('id_person');
			$table->string('nick')->unique();
            $table->string('pass');
			$table->string('gender');
			$table->string('email');
			$table->string('prefM');
			$table->string('age');
			$table->int('height');
			$table->string('complex');
			$table->string('ecolor');
			$table->string('hcolor');
			$table->string('role');
			$table->string('city');
			$table->string('prefW');
			$table->string('nation');
			$table->string('image');
			
			
			
            
            //$table->timestamp('email_verified_at')->nullable();
            
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
        Schema::dropIfExists('person');
    }
}
