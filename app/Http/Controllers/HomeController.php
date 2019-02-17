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
        return view('pages.messages.index', $data);
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
    public function update(Request $request, $id)
    {    
        $ddd->id = $request->update('id');
        $ddd->name = $request->update('name');
        $ddd->email = $request->update('email');
        $ddd->messages = $request->update('messages');
        $ddd->save();
        return redirect()->action('HomeController@index');
    }

    public function edit($id)
    {
        $old = [
            'title' => 'Guestbook',
            'pagetitle' => 'LALALAraveL',
            'oldd' => Message::find($id)
        ];
        return view('pages.messages.edit', $old);

    }
}
