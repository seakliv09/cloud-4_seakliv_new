<?php

namespace App\Http\Controllers;

use App\Models\Quiz4;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(){
        return view('home');
    }
    public function submit(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'file'=>'required',
        ]);
        $path= $request['file']->storeAs('quiz4',$request['file']->getClientOriginalName());
        Quiz4::create([
            'firstname'=>$request['firstname'],
            'lastname'=>$request['lastname'],
            'file'=>$path
        ]);
        $request['file']->storeAs('quiz4',$request['file']->getClientOriginalName(),'spaces');
        session()->flash('message', 'Image upload succcessfully');
        return back();
    }
    public function show(){
        $components=Quiz4::get();
        return view('result')->with(['components'=>$components]);
    }
}
