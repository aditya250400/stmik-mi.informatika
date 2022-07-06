<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stmik.email.email');
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
        $validateData = $request->validate(
            [

                'email' =>  ['required', 'email', 'max:255', 'min:2'],

            ]);
        Email::create($validateData);

        return redirect()->route('email.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(email $email)
    {
        //
    }
}
