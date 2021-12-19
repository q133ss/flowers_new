<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserEvent;

class EventController extends Controller
{
    public function index(){
        $events = UserEvent::where('user_id', \Auth::user()->id)->get();
        return view('account.event', compact('events'));
    }
}
