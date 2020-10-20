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
                                        <h5>Payment Form</h5>
                                    </div>
                                    <div class="card-body">
                                    <form action="/pay" method="get">
                                     @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Company</label>
                                                <input type="text" class="form-control" name="company" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact.</label>
                                                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone number" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" name="company_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item</label>
                                                <input type="text" class="form-control" name="item" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Amount</label>
                                                <input type="text" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paid</label>
                                                <input type="text" class="form-control" name="paid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Deposit" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Balance</label>
                                                <input type="text" class="form-control" name="balance" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Balance" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Time Frame</label>
                                                <input type="text" class="form-control" name="time_frame" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Time Frame" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Incharge</label>
                                                <input type="text" class="form-control" name="incharge" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Person Incharge" required>
                                            </div>
                                            </div>  
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Reason</label>
                                                <input class="form-control" id="exampleFormControlTextarea1" name="reason" placeholder="Write reason here" required>
                                            </div>
                                            </div> 
                                            <div class="col-md-12 text-center">      
                                            <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                            
                                            <a href="/get-invoice" button class="btn waves-effect waves-light btn-warning">Back</button></a>
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
