<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        $user = User::first();
       // dd($about);
        return view('back.info.update',compact('about','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
       //dd($request->all());
     // $path = $request->file('profile_image')->store('public/images');
     if($request->hasFile('profile_image')){
        $file=$request->file('profile_image');
        $extention=$file->getClientOriginalExtension();
        $fileName=time().'.'.$extention;
        $file->move('images',$fileName);
        $about->profile_image =$fileName;
     }
     if($request->hasFile('cover_image')){
        $file=$request->file('cover_image');
        $extention=$file->getClientOriginalExtension();
        $fileName=time().'.'.$extention;
        $file->move('images',$fileName);
        $about->cover_image =$fileName;
     }
     if($request->hasFile('pdf')){
        $path = $request->file('pdf')->store('public/files');
        $about->pdf = $path;
     }
     if(isset($request->name)){
        $user = User::first();
        $user->name = $request->name;
        $user->save();
     }

     $about->position = $request->position;
     $about->sub_position = $request->sub_position;
     $about->skype = $request->skype;
     $about->address = $request->address;
     $about->phone = $request->phone;
     $about->dob = $request->dob;
      $about->des = $request->des;
      $about->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
