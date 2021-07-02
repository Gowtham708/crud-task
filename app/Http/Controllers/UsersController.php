<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
     $users=Register::all();
    //dd($user_registers);
    return view('index',compact('user_registers'));
    }


    public function store(Request $request)
    {
    //dd($request->all());
    Register::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'state' => $request->state,
        'country' => $request->country
    ]);
     
    return redirect()->route('user.index')->with('success','User has been registered'); 
    }
    
}
