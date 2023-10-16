<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use DB;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reg=register::get();
        return view('visitor_details',compact('reg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $email=$request->get('email');
        $pass=$request->get('password');
        $mobile=$request->get('mobile');
        $reg=new register([
            'name'=>$name,
            'email'=>$email,
            'password'=>$pass,
            'mobile'=>$mobile
        ]);
        $reg->save();
        
        return response('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function loginuser(Request $request)
    {
        $email=$request->get('email');
        $pass=$request->get('password');
        $reg=DB::table('registers')->where('email','=',$email)->where('password','=',$pass)->count();
        if($reg==1)
        {
            return response('login success');
        }
        else
        {
            return response('login fail');
        }
    }
}
