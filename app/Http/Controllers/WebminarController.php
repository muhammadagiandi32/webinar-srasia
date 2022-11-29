<?php

namespace App\Http\Controllers;

use App\Models\Webminar as Webminars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Webinar;

class WebminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.register');
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
        //
        return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Webminar  $webminar
     * @return \Illuminate\Http\Response
     */
    public function show(Webminars $webminar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Webminar  $webminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Webminars $webminar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Webminar  $webminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Webminars $webminar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webminar  $webminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Webminars $webminar)
    {
        //
    }

    public function post(Request $request)
    {
        // return response()->json($request);
        $validatedData = $request->validate([
            'email' => ['required', 'unique:webminars', 'max:255'],
            // 'full_name' => ['required'],
        ]);
        $email = $request->email;
        // dd();

        if (!$validatedData) {
            return response()->json(['response' => 'error']);
        } else {
            $webminar = new Webminars;

            $webminar->fullname = $request->full_name;
            $webminar->email    = $request->email;
            $webminar->company  = $request->company;
            $webminar->position = $request->position;
            $webminar->number_phone = $request->number_phone;
            $webminar->day = 'day1';

            $webminar->save();
            Mail::to($email)->send(new Webinar($email));
            return response()->json($request);
        }
    }
}
