<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Guestbook',
    		'pagetitle' => 'Гостьова книга'
    	];
        Return view('index', $data);
    }
    public function edit($id)
    {
        Return view('pages.messages.edit');
    }
}
