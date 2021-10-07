<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class HomeController extends Controller
{

  //homepage utente loggato
  public function index() {
    return view('admin.home');
  }


  //vista utente loggato
  public function profile()
    {
        return view('user.profile');
    }

  //token per api
    public function generateToken()
    {
		$api_token = Str::random(80);
		$user = Auth::user();
		$user->api_token = $api_token;
		$user->save();

		// @dd($api_token,$user);

        return redirect()->route('admin-profile');
    }

}
