<?php

namespace App\Http\Controllers;

use App\Models\lapor;
use Illuminate\Http\Request;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.lapor.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function show(lapor $lapor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function edit(lapor $lapor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lapor $lapor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lapor  $lapor
     * @return \Illuminate\Http\Response
     */
    public function destroy(lapor $lapor)
    {
        //
    }
}
