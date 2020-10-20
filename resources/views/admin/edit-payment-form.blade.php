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
                                        <h5>Edit Payment Form</h5>
                                    </div>
                                    <div class="card-body">
                                    @foreach($edit_payment as $payment)
                                    <form action="/save-edited-payment/{{$payment->id}}" method="get">
                                     @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Company</label>
                                                <input type="text" class="form-control" name="company" value="{{$payment->company}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone Number</label>
                                                <input type="text" class="form-control" name="phone" value="{{$payment->phone}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text" class="form-control" name="company_email" value="{{$payment->company_email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item</label>
                                                <input type="text" class="form-control" name="item" value="{{$payment->item}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Amount</label>
                                                <input type="text" class="form-control" name="amount" value="{{$payment->amount}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paid</label>
                                                <input type="text" class="form-control" name="paid" value="{{$payment->paid}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Deposit" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Balance</label>
                                                <input type="text" class="form-control" name="balance" value="{{$payment->balance}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Balance" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Time Frame</label>
                                                <input type="text" class="form-control" name="time_frame" value="{{$payment->time_frame}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Time Frame" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Incharge</label>
                                                <input type="text" class="form-control" name="incharge" value="{{$payment->incharge}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Person Incharge" required>
                                            </div>
                                            </div>  
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Reason</label>
                                                <input class="form-control" id="exampleFormControlTextarea1" name="reason" value="{{$payment->reason}}" rows="3"  required>
                                            </div>
                                            </div> 
                                            <div class="col-md-12 text-center">      
                                            <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                            
                                            <a href="/get-invoice" button class="btn waves-effect waves-light btn-warning">Back</button></a>
                                            </div>
                                            </div>
                                    </form>
                                    @endforeach
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
