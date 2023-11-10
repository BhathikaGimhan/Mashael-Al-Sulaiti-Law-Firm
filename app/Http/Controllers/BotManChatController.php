<?php
namespace App\Http\Controllers;

use App\Conversations\ButtonConversation;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotMan;

class BotManChatController extends Controller
{
    public function invoke()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
           
            $botman->startConversation(new ButtonConversation);
            // if ($message == 'hi') {
            //     $this->askName($botman);
            // }else{
            //     $botman->reply("write 'hi' for testing...");
            // }
  
        });
  
        $botman->listen();
    }
   
    public function askInfo($botman)
    {
        $botman->ask('Hey There! How are you?', function(Answer $answer) {
            $ans = $answer->getText();
            $this->say('Whats up '.$ans);
        });
    }

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
            $name = $answer->getText();
  
            $this->say('Nice to meet you '.$name);
        });
    }
}