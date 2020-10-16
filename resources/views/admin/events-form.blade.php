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
                                        <h5>News Form</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form action="/create-event" method="get">
                                                @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Title</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="heading" aria-describedby="emailHelp" placeholder="Enter title" required>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Content</label>
                                                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Write brief text here" required></textarea>
                                                    </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                    </form>
                                    <a href="/display-events-in-dashboard" button class="btn waves-effect waves-light btn-warning">Back</button></a>
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
