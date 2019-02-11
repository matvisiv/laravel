<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
	$data = [
    		'title' => 'Guestbook',
    		'pagetitle' => 'LALALAraveL',
		'messages' => Message::latest()->paginate(4),
		'count' => message::count()
    ];
        Return view('pages.messages.index', $data);
    }
    public function edit($id)
    {
        Return view('pages.messages.edit');
    }
}
