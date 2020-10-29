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
                                        <h5>
                                        <a href="/make-payments" button class="btn btn-primary mr-0">Add Payments</button></a>
                                        </h5>
                                        @if(auth()->user()->role_id == 1)
                                        <span class="font-weight-bold">This is the current total Amount ={{number_format($total_amount)}}</span>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                        <th>Company</th>
                                                        <th>Item</th>
                                                        <th>Amount</th>
                                                        <th>Paid</th>
                                                        <th>Balance</th>
                                                        <th>Time Frame</th>
                                                        <th>Incharge</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($payment as $payments)
                                                    <tr>
                                                        <td>{{$payments->company}}</td>
                                                        <td>{{$payments->item}}</td>
                                                        <td>{{$payments->amount}}</td>
                                                        <td>{{$payments->paid}}</td>
                                                        <td>{{$payments->balance}}</td>
                                                        <td>{{$payments->time_frame}}</td>
                                                        <td>{{$payments->incharge}}</td>
                                                        <td>
                                                        <a href="/edit-payment/{{$payments->id}}" button class="btn btn-success btn-sm">Edit</button></a>
                                                        <a href="/get-payment-information/{{$payments->id}}" button class="btn btn-primary btn-sm">view</button></a>
                                                        <a href="/delete-payment/{{$payments->id}}" button class="btn btn-danger btn-sm">Delete</button></a>
                                                        </td>
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


</body>

</html>
