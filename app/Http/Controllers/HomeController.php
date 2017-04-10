<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Message;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Form;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $messages= Message::all();
        $users= User::all();
        $videos= Video::all();
        View::share('users', $users);
        View::share('videos', $videos);
        View::share('messages', $messages);
  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
    }
}
