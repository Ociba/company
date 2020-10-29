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
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Componant</h5>
                </div>
                <div class="card-body">
                    <h5>Form controls</h5>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" placeholder="Text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ Main Content ] end -->


    @include('layouts.javascript')

<div class="footer-fab">
    <div class="fab-hover">
        <ul class="list-unstyled">
            <li><a href="../doc/index-bc-package.html" target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
            <li><a href="../doc/index.html" target="_blank" data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i class="feather icon feather icon-book"></i></a></li>
        </ul>
    </div>
</div>


</body>

</html>
