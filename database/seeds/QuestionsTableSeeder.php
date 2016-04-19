<?php
use Illuminate\Database\Seeder;
use App\Question;
use App\Response;
use App\User;

class QuestionsTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	mb_regex_encoding('UTF-8');    	 
    	$user = User::find(1);   
    	for($k = 1; $k < 2; $k++){
    		$dom = new DOMDocument();
	    	$dom->loadHTMLFile("/home/serenity/Desktop/Serenity/database/QR/affaires".$k.".html");
	    	$values = preg_split("[<h3>|</h3>]", $dom->saveHTML());       	
	    	for($i = 0; $i < count($values)-1; $i+=2){
	    		$question = new Question([
	    				"content" => html_entity_decode(trim(strip_tags($values[$i]))),
	    				"key_content" => html_entity_decode(trim(strip_tags($values[$i]))),
	    				"is_ia" => 1
	    		]);
				$user->questions()->save($question);
	    		
	    		$response = new Response;
	    		$response->text = html_entity_decode(trim(strip_tags($values[$i+1]))); 
	    		$question->responses()->save($response);    		
	    	}
    	}
    }
}
