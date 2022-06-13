<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->

                @php
                    $tasks = Session::get('tasks');
                @endphp

                @foreach ($tasks as $task)
                    <li @if (isset($current_task->id) && in_array($current_task->id, array_column($task['relations'], 'id'))) class="nav-item menu-open" @else class="nav-item" @endif>
                        <a href="{{ $task['uri'] }}"
                            @if (isset($current_task->id) && in_array($current_task->id, array_column($task['relations'], 'id'))) class="nav-link active" @else class="nav-link" @endif>
                            <i class="nav-icon fas {{ $task['icon'] }}"></i>
                            <p>
                                {{ $task['id'] }} {{ $task['name'] }}
                                @if (count($task['relations']) > 0)
                                    <i class="right fas fa-angle-left"></i>
                                @endif
                                {{-- <span class="right badge badge-danger">New</span> --}}
                            </p>
                        </a>

                        @if (count($task['relations']) > 0)
                            <ul class="nav nav-treeview">

                                @foreach ($task['relations'] as $item)
                                    @if (isset($item['relations']) && count($item['relations']) > 0)
                                        <li class="nav-item">
                                            <a href="{{ $item['uri'] }}" class="nav-link">
                                                <i class="fa {{ $item['icon'] }} nav-icon"></i>
                                                <p>
                                                    {{ $item['name'] }}
                                                    @if (count($task['relations']) > 0)
                                                        <i class="right fas fa-angle-left"></i>
                                                    @endif
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                @foreach ($item['relations'] as $item2)
                                                    <li class="nav-item">
                                                        <a href="{{ $item2['uri'] }}" class="nav-link">
                                                            <i class="far fa-circle nav-icon"></i>
                                                            <p>{{ $item2['name'] }}</p>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item ">
                                            <a href="{{ $item['uri'] }}"
                                                @if ($item['controller'] == $controller) class="nav-link active" @else class="nav-link" @endif>
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>{{ $item['name'] }}</p>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
