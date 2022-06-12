<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\RolesTask;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(15);

        return view('system.roles.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new Role();

        return view('system.roles.create')->with('role', $role);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect('/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = Role::find($role->id);
        $tasks = Task::orderBy('order')->get();

        return view('system.roles.show')->with('role', $role)->with('tasks', $tasks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $role = Role::find($role->id);
        $tasks = Task::orderBy('order')->get();

        return view('system.roles.edit')->with('role', $role)->with('tasks', $tasks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }

    public function updateTasksRole(Request $request, $id) {
        

        if (count($request->tasks) > 0) {
            
            RolesTask::where('role_id', $id)->delete();

            foreach ($request->tasks as $task) {
                $role_tasks = new RolesTask();
                $role_tasks->role_id = $id;
                $role_tasks->task_id = $task;
                $role_tasks->save();
            }
        }
        
        return redirect()->back();
    }
}
