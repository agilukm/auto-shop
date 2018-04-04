<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Services\Chat;
use App\Services\ChatMessage;
use View;
use Auth;
use Redirect;
use Carbon;
use Session;
use Mail;
use Response;


class FrontController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        //unset($_COOKIE['email']);
        $data = array();
        return View('front.home',$data);
    }

    public function setupCookie()
    {
        $request = new Request;
        setcookie("email",Input::get('email'),time()+3600);
        $chat = new Chat;
        if($chat->where('user1',Input::get('email')->first())) {
            return '';
        }
        else {
            $chat->user1 = Input::get('email');
            $chat->user2 ='admin';
            $chat->save();
            return $chat;
        }

    }

    public function sendMessage()
    {
        $username = $_COOKIE['email'];
        $text = Input::get('text');

        $chatMessage = new ChatMessage();
        $chatMessage->sender_username = $username;
        $chatMessage->receiver_username = 'admin';
        $chatMessage->message = $text;
        $chatMessage->save();
    }

    public function isTyping()
    {
        $username = $_COOKIE['email'];

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
            $chat->user1_is_typing = true;
        else
            $chat->user2_is_typing = true;
        $chat->save();
    }

    public function notTyping()
    {
        $username = $_COOKIE['email'];

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
            $chat->user1_is_typing = false;
        else
            $chat->user2_is_typing = false;
        $chat->save();
    }

    public function retrieveChatMessages()
    {
        $username = $_COOKIE['email'];

        $message = ChatMessage::where('sender_username', '==', 'admin')->where('receiver_username'.'==',$username)->where('read', '=', false)->first();
        if ($message) {
            $message->read = true;
            $message->save();
            return $message->message;
        }
        return '';


    }

    public function retrieveTypingStatus()
    {
        $username = $_COOKIE['email'];

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
        {
            if ($chat->user2_is_typing)
                return $chat->user2;
        }
        else
        {
            if ($chat->user1_is_typing)
                return $chat->user1;
        }
    }



}
