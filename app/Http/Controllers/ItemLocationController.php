<?php

namespace App\Http\Controllers;

use App\Models\ItemLocation;
use App\Http\Requests\StoreItemLocationRequest;
use App\Http\Requests\UpdateItemLocationRequest;

class ItemLocationController extends Controller
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
     * @param  \App\Http\Requests\StoreItemLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemLocationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemLocation  $itemLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ItemLocation $itemLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemLocation  $itemLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemLocation $itemLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemLocationRequest  $request
     * @param  \App\Models\ItemLocation  $itemLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemLocationRequest $request, ItemLocation $itemLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemLocation  $itemLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemLocation $itemLocation)
    {
        //
    }
}
