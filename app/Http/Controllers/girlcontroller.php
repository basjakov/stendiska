<?php

namespace App\Http\Controllers;

use App\girls;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class girlcontroller extends Controller
{
    public function newgirl()
    {
    	return view('girls');
    }
     public function store(Request $request)
    {
    	
    		
    	
    		$cover = $request->file('file');
            $extension = $cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));


            $girls = new girls();

            $girls->name = $request->name;
            $girls->lastname = $request->lastname;
            $girls->age = $request->age;
            $girls->height = $request->height;
            $girls->weight = $request->weight;
            $girls->university = $request->university;
            $girls->specification = $request->specification;
            $girls->workingtime = $request->workingtime;
            $girls->file = $cover->getfilename().'.'.$extension;

            $girls->save();

    		return redirect('/');
    }
    public function girls()
    {
    		$girls = girls::all();

    		return view('layouts.master',compact('girls'));
    }

    public function show($id)
    {
    		$girls = girls::all();

    		
    		return view('layouts.girl',compact('girls'));
    }
}
