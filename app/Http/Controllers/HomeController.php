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

 #   public function edit($id)
 #   {
 #       $ddd = new messages;
 #       $ddd->name = "igor";
 #       $ddd->email = "ka4r6@a3ui.g";
 #       $ddd->save();
 #       Return view('messages.index');
 #   }

    public function add(Request $request)
    {
        $ddd = new Message;
        $ddd->name = $request->input('name');
        $ddd->email = $request->input('email');
        $ddd->messages = $request->input('messages');
        $ddd->save();
        return redirect()->action('HomeController@index');
    }

    public function edit(Message $id,Request $request)
    {
#        $user = Message::find($id);
        dd($id)
#        return view('pages.messages.edit', $user);
    }
}
