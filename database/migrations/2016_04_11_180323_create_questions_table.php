<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer("user_id")->unsigned()->index();
            $table->foreign ( "user_id" )->references ( 'id' )->on ( 'users' )->onDelete ( 'cascade' );
            $table->text('content');
            $table->string('key_content');
            $table->string('state');
            $table->tinyInteger("is_ia")->default(0);
			$table->timestamps ();			
			$table->index('key_content');					
		} );
        
        DB::statement('ALTER TABLE questions ADD FULLTEXT search(content)');
		
		Schema::create ( 'responses', function (Blueprint $table) {
			$table->increments ( 'id' )->unsigned ();
			$table->text ( "text" );
			$table->timestamps ();			
				
		} );
		
		DB::statement('ALTER TABLE responses ADD FULLTEXT search(text)');
		
		Schema::create ( 'question_response', function (Blueprint $table) {
			$table->integer ( "question_id" )->unsigned ()->index ();
			$table->foreign ( "question_id" )->references ( 'id' )->on ( 'questions' )->onDelete ( 'cascade' );
			$table->integer ( "response_id" )->unsigned ()->index ();
			$table->foreign ( "response_id" )->references ( 'id' )->on ( 'responses' )->onDelete ( 'cascade' );
			$table->float( "score", 6 );			
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
    	Schema::drop('question_response');
    	Schema::table('questions', function($table) {    		
    		$table->dropIndex('search');    	
    	});    	
        Schema::drop('questions');
        Schema::table('responses', function($table) {
        	$table->dropIndex('search');
        });
        Schema::drop('responses');
    }
}
