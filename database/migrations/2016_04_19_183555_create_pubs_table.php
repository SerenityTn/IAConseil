<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    	Schema::create('themes', function (Blueprint $table) {
    		$table->increments('id');    		
    		$table->string('name');
    		$table->timestamps();
    	});
    	
        Schema::create('pubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->integer('theme_id')->unsigned()->index();
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){    	
        Schema::drop('pubs');
        Schema::drop('themes');
    }
}
