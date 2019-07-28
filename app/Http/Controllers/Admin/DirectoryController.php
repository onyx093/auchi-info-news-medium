<?php

namespace App\Http\Controllers\Admin;

use App\Directory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.directories.index');
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
     * @param  \App\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function show(Directory $directory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $directory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directory $directory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Directory  $directory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
        //
    }
}
