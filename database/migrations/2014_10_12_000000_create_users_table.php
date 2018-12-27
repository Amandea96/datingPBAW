<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
			$table->string('gender');
			$table->string('prefM');
			$table->string('age',15);
			$table->integer('height')->nullable();
			$table->string('complex',15)->nullable();
			$table->string('ecolor',15)->nullable();
			$table->string('hcolor',15)->nullable();
			$table->string('role',15)->default('user');
			$table->string('city',15);
			$table->string('prefW',15);
			$table->string('nation',30);
			$table->longText('image');
			$table->longText('description')->nullable();
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
