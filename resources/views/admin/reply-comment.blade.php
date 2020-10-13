<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include('layouts.style')
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
        <div class="col-12">
    {{--
    <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
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
                  <th>Action</th>
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
                  <a href="/approve/{{$comment->id}}" class="btn btn-danger"> approve</a>
                  <a href="/reply/{{$comment->id}}" class="btn btn-primary"> reply</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          --}}
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Reply Comment Form</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @foreach($reply_comment as $reply)
              <form role="form" action="/reply-comment/{{$reply->id}}" method="get">
                <!-- text input -->
                <div class="form-group">
                  <label>Text</label>
                  <textarea input type="text" class="form-control" name="reply" placeholder="Enter ..." required></textarea>
                  <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit Reply</button>
                </div>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
</body>
</html>
