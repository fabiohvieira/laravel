<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\RolesTask;
use App\Models\UsersRole;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
    public function index() {

        return view('layouts.sidebar.login');

    }

    public function login(Request $request) {

        if (Auth::attempt(['user' => $request->user, 'password' => $request->password])) {

            $this->putSessionTasks();

            return redirect('/');
        }

        return redirect('/login');

    }

    public function logout() {

        Auth::logout();

        return redirect('/login');

    }

    public function putSessionTasks() {


        Session::put('tasks', TaskService::getUserTasks(Auth::id()));

        return true;

    }

}
