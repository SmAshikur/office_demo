<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.Expertise.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.Expertise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $expertise = new Expertise();
        $expertise->title = $request->title ;
        $expertise->des= $request->des;
        $expertise->from= $request->from;
        $expertise->to= $request->to;
      //  dd($expertise);
        $expertise->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function show(Expertise $expertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Expertise $expertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expertise $expertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expertise  $expertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expertise $expertise)
    {
        //
    }
}
