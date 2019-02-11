<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
    	$messages = Message::all;
    	dd($messages);
    	$data = [
    		'title' => 'Guestbook',
    		'pagetitle' => 'LALALARAVEL Guestbook'
    	];
        Return view('pages.messages.index', $data);
    }
    public function edit($id)
    {
        Return view('pages.messages.edit');
    }
}
