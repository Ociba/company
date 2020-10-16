<!DOCTYPE html>
<html lang="en">

<head>

	@include('layouts.title')
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

	<!-- Favicon icon -->
    @include('layouts.css')
    <link rel="stylesheet" href="{{asset('assets/plugins/data-tables/css/datatables.min.css')}}">
</head>

<body class="">
	@include('layouts.sidebar')

	<!-- [ Header ] start -->
	@include('layouts.topnav')
	<!-- [ Header ] end -->
	
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<div class="pcoded-content">
			<div class="pcoded-inner-content">
				<div class="main-body">
					<div class="page-wrapper">
						@include('layouts.breadcrumb')
						<!-- [ Main Content ] start -->
						<div class="row">
							<!-- Zero config table start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Zero Configuration</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Language</th>
                                                        <th>Others</th>
                                                        <th>Git Link</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($read_applications as $read)
                                                    <tr>
                                                        <td>{{$read->first_name}} {{$read->last_name}}</td>
                                                        <td>{{$read->email}}</td>
                                                        <td>{{$read->language}}</td>
                                                        <td>{{$read->others}}</td>
                                                        <td>{{$read->git_link}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>

						<!-- [ Main Content ] end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ Main Content ] end -->


    @include('layouts.javascript')
    <script src="{{asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/data-basic-custom.js')}}"></script>

<div class="footer-fab">
    <div class="b-bg">
        <i class="fas fa-question"></i>
    </div>
    <div class="fab-hover">
        <ul class="list-unstyled">
            <li><a href="../doc/index-bc-package.html" target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
            <li><a href="../doc/index.html" target="_blank" data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i class="feather icon feather icon-book"></i></a></li>
        </ul>
    </div>
</div>


</body>

</html>
