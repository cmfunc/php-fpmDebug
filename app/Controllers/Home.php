<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo 'welcome_message';
		return view('welcome_message');
	}
}
