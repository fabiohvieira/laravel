<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@isset($current_task->name) {{ $current_task->name }} @endif</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        @isset($current_task->parent->parent->name)
                            <li class="breadcrumb-item active">{{ $current_task->parent->parent->name }}</li>
                        @endisset
                        @isset($current_task->parent->name)
                            <li class="breadcrumb-item active">{{ $current_task->parent->name }}</li>
                        @endisset
                        @isset($current_task->name)
                            <li class="breadcrumb-item active">{{ $current_task->name }}</li>
                        @endisset
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            @yield('content')

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
