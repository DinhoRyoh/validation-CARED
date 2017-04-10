<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests;

class MessageController extends Controller
{
    public function post(Request $request){
      $message = new Message;
        $message->messages = $request->comment;
        $message->idusers = $request->id;
        $message->idvideos = $request->idVideo;
        $message->save();
        return redirect('/home');
    }
}
