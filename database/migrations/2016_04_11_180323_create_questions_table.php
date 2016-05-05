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
            $table->text('content');
            $table->string('key_content');
            $table->boolean('state');
            $table->boolean("is_ia")->default(false);
			$table->timestamps ();			
			$table->index('key_content');
			$table->engine = 'myISAM';
		} );
        
        DB::statement('ALTER TABLE questions ADD FULLTEXT search(content)');
		
		Schema::create ( 'responses', function (Blueprint $table) {
			$table->increments ( 'id' )->unsigned ();
			$table->text ( "text" );
			$table->timestamps ();			
				
		} );
						
		Schema::create ( 'question_response', function (Blueprint $table) {
			$table->integer ( "question_id" )->unsigned ()->index ();		
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
        Schema::drop('responses');
    }
}
