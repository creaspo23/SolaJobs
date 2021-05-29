<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Apply::create([
            'job_id' => $request->job_id,
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'state' => $request->state,
            'email' => $request->email,
            'exprince' => $request->exprince,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(Apply $apply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(Apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apply $apply)
    {
        //
    }
}
