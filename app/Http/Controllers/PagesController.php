<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		return view('about.index');
	}

  public function store(Request $request)
  {
     $this->validate($request, [
       'firstname' => 'required|min:3',
       'lastname' => 'required|min:3',
       'email' => 'required|email',
       'telephone' => 'required|max:10',
       'message' => 'required|min:10',
     ]);

    return 'Nous avons bien reçu votre email';
  }
}
