<?php

namespace App\Http\Controllers;

use App\Models\Addressbook;
use App\Http\Requests\StoreAddressbookRequest;
use App\Http\Requests\UpdateAddressbookRequest;

class AddressbookController extends Controller
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
     * @param  \App\Http\Requests\StoreAddressbookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressbookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function show(Addressbook $addressbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Addressbook $addressbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressbookRequest  $request
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressbookRequest $request, Addressbook $addressbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addressbook $addressbook)
    {
        //
    }
}
