<?php

namespace App\Http\Controllers;

use App\Models\ItemBranch;
use App\Http\Requests\StoreItemBranchRequest;
use App\Http\Requests\UpdateItemBranchRequest;

class ItemBranchController extends Controller
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
     * @param  \App\Http\Requests\StoreItemBranchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemBranchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemBranch  $itemBranch
     * @return \Illuminate\Http\Response
     */
    public function show(ItemBranch $itemBranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemBranch  $itemBranch
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemBranch $itemBranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemBranchRequest  $request
     * @param  \App\Models\ItemBranch  $itemBranch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemBranchRequest $request, ItemBranch $itemBranch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemBranch  $itemBranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemBranch $itemBranch)
    {
        //
    }
}
