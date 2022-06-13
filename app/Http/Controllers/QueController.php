<?php

namespace App\Http\Controllers;

use App\Models\Que;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session = Session::get('que');
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
    public function store(Request $request, $que)
    {
        $session = Session::get('que');
        if(empty($session)){
            $session = [];
        }
        array_push($session, $que);
        session(['que' => $session]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function show(Que $que)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function edit(Que $que)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $que)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Que  $que
     * @return \Illuminate\Http\Response
     */
    public function destroy(Que $que)
    {
        //
    }
}
