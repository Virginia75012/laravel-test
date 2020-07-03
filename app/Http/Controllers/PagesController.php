<?php

namespace App\Http\Controllers;

use App\Users;
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

    $user = Users::create([
      'firstname' => request('firstname'),
      'lastname' => request('lastname'),
      'email' => request('email'),
      'telephone' => request('telephone'),
      'address' => request('address'),
      'city' => request('city'),
      'zipcode' => request('zipcode'),
      'message' => request('message'),
    ]);

    return 'Nous avons bien reçu vos informations avec votre commentaire. Merci !';
  }
}
