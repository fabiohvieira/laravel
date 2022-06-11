<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserDefinedCodeRequest;
use App\Http\Requests\UpdateUserDefinedCodeRequest;
use App\Models\UserDefinedCode;

class UserDefinedCodeController extends Controller
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
     * @param  \App\Http\Requests\StoreUserDefinedCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDefinedCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDefinedCode  $userDefinedCode
     * @return \Illuminate\Http\Response
     */
    public function show(UserDefinedCode $userDefinedCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDefinedCode  $userDefinedCode
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDefinedCode $userDefinedCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDefinedCodeRequest  $request
     * @param  \App\Models\UserDefinedCode  $userDefinedCode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDefinedCodeRequest $request, UserDefinedCode $userDefinedCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDefinedCode  $userDefinedCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDefinedCode $userDefinedCode)
    {
        //
    }
}
