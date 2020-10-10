<!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    @include('layouts.style')
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo">
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Goproug</b></span>
                </a>

                @include('layouts.topnav')
                @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('layouts.breadcrumbs')
                @include('layouts.message')
                <!-- Main content -->
                            <div class="box">
                                <div class="box-body">
                                    <div class="box box-info">
                                        <div class="box-header with-border">
                                        <h3 class="box-title">{{request()->route()->getName()}}</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <form class="form-horizontal" method="get" action="/create-event" enctype="multipart/form-data">
                                        @csrf
                                        <div class="box-body">
                                            <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Heading</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail3" name="heading" placeholder="">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-2 control-label">Content</label>

                                            <div class="col-sm-10">
                                            <textarea class="form-control" name="content" rows="3" placeholder="Enter ..."></textarea>
                                            </div>
                                            </div>
                                            <div class="text-center">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                    </div>
            <!-- /.content-wrapper -->

            @include('layouts.footer')

            <!-- Control Sidebar -->
            @include('layouts.control-sidebar')
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->
    @include('layouts.javascript')
    </body>
</html>