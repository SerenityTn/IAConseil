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
    	for($k = 1; $k <= 4; $k++){
            $dom = new DOMDocument();
            $dom->loadHTML('<?xml encoding="utf-8" ?>'.file_get_contents(database_path()."/QR/affaires".$k.".html"));
            $divs = $dom->getElementsByTagName('div');
            echo $k . '\n';
            foreach ($divs as $div) {
                echo $div->nodeValue . "\n\n";
                $h3 = $div->getElementsByTagName('h3')->item(0);
                $question = new Question([
                    "content" => $h3->nodeValue,
                    "key_content" => $h3->nodeValue,
                    "is_ia" => 1
                ]);

                if($h3 != null){
                    $div->removeChild($h3);
                    $user->questions()->save($question);
                    $h3 = $div->getElementsByTagName('h3')->item(0);
                    $response = new Response;
	    		    $response->text = $div->nodeValue;
                    $question->responses()->save($response);
                }
            }
        }
    }
}
