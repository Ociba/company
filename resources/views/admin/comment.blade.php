<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('layouts.style')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>JAA</b>JA</span>
    </a>

    @include('layouts.topnav')
    @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.breadcrumbs')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped responsive">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Comment</th>
                  <th>Reply</th>
                  <th class="col-xs-2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comment_to_be_approved as $comment)
                <tr>
                  <td>{{$comment->last_name}} {{$comment->first_name}}</td>
                  <td>{{$comment->email}}</td>
                  <td>{{$comment->contact}}</td>
                  <td> {{$comment->comment}}</td>
                  <td> {{$comment->reply}}</td>
                  <td>
                  <a href="/approve/{{$comment->id}}" class="btn btn-danger btn-xs"> approve</a>
                  <a href="/reply/{{$comment->id}}" class="btn btn-primary btn-xs"> reply</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          </div>
          </section>
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
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
</body>
</html>
