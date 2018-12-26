<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutcontrolletr extends Controller
{
    public function show()
    {
    		$tasks = [
			'artnanal',
			'daser',
			'viz dnel'
					];

			return view('/tut',compact('tasks'));
    }
}
