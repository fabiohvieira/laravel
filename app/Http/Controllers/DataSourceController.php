<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataSourceRequest;
use App\Http\Requests\UpdateDataSourceRequest;
use App\Models\DataSource;

class DataSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datasources = DataSource::paginate(10);

        return view('system.datasources.index', compact('datasources'));

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
     * @param  \App\Http\Requests\StoreDataSourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataSourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSource  $dataSource
     * @return \Illuminate\Http\Response
     */
    public function show(DataSource $dataSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSource  $dataSource
     * @return \Illuminate\Http\Response
     */
    public function edit(DataSource $dataSource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataSourceRequest  $request
     * @param  \App\Models\DataSource  $dataSource
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataSourceRequest $request, DataSource $dataSource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSource  $dataSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSource $dataSource)
    {
        //
    }
}
