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
                        @include('layouts.message')
						<!-- [ Main Content ] start -->
						<div class="row">
                        @include('layouts.message')
							<!-- Zero config table start -->
                            <div class="col-sm-12">
                                <div class="card">
                                <div class="card-header">
                                        <h5>Expenditure Form</h5>
                                    </div>
                                    <div class="card-body">
                                    <form action="/create-expenditure" method="get">
                                     @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item</label>
                                                <input type="text" class="form-control" name="item" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Quantity.</label>
                                                <input type="text" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Unit</label>
                                                <input type="text" class="form-control" name="unit" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter dozen, carton" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Particular</label>
                                                <input type="text" class="form-control" name="particulars" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter particulars" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Rate</label>
                                                <input type="text" class="form-control" name="rate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter rate" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="person" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Persons Name" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date</label>
                                                <input type="text" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date" required>
                                            </div>
                                            </div> 
                                            <input type="hidden" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter amount"> 
                                            <div class="col-md-12 text-center">      
                                            <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                            
                                            <a href="/get-expenditure" button class="btn waves-effect waves-light btn-warning">Back</button></a>
                                            </div>
                                            </div>
                                    </form>
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


</body>

</html>
