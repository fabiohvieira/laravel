<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersRoleRequest;
use App\Http\Requests\UpdateUsersRoleRequest;
use App\Models\UsersRole;

class UsersRoleController extends Controller
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
     * @param  \App\Http\Requests\StoreUsersRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRoleRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersRole  $usersRole
     * @return \Illuminate\Http\Response
     */
    public function show(UsersRole $usersRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersRole  $usersRole
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersRole $usersRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRoleRequest  $request
     * @param  \App\Models\UsersRole  $usersRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRoleRequest $request, UsersRole $usersRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersRole  $usersRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersRole $usersRole)
    {
        //
    }
}
