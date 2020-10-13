<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomerceController extends Controller
{
	public function login()
	{
		return view('ecomerce.login');
		# code...
	}
	public function contact()
	{
		return view('ecomerce.contactus');
		# code...
	}
	public function about()
	{
		return view('ecomerce.about');
		# code...
	}
	public function deals()
	{
		return view('ecomerce.products');
		# code...
	}
    //
}
