<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DescrForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('person', function (Blueprint $table) {
            $table->int('id_person');
			$table->string('nick')->unique();
            $table->increments('id_desc');
			$table->string('date');
			$table->text('text');
			//$table->foreign('product_id')->references('id')->on('products');
		
		//wybrać licencję np.GPL, eclipsa prime...  choose a licence.com, gdy używamy bibliotekę to tzreba wiedzieć co, gdzie i jak to robi
			
			
			
            
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
        Schema::dropIfExists('description');
    }
}
