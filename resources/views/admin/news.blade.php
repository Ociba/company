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
                            <div class="box-header">
                               <h3 class="box-title"><a href="/get-form-to-add-news"><button class="btn btn-sm btn-primary">Add news</button></a></h3>
                            </div>
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Heading</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($display_news as $news)
                                            <tr>
                                                <td>{{$news->heading}}</td>
                                                <td>{{$news->content}}</td>
                                                <td>{{$news->image}}</td>
                                                <td>
                                                <a href="/delete-news/{{ $news->id }}"><button class="btn btn-sm btn-primary">delete</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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