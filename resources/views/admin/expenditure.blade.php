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
                                        <a href="/get-expenditure-form" button class="btn btn-primary mr-0">Add expenditures</button></a>
                                        </h5>
                                        <span class="font-weight-bold">Expenditure ={{ number_format($total_expenditure)}} |Account Balance ={{ number_format($current_balance)}}</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Price</th>
                                                        <th>Amount</th>
                                                        <th>Person</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($expenditure as $expenditures)
                                                    <tr>
                                                        <td>{{$expenditures->item}}</td>
                                                        <td>{{$expenditures->quantity}}</td>
                                                        <td>{{$expenditures->unit}}</td>
                                                        <td>{{$expenditures->amount}}</td>
                                                        <td>{{$expenditures->person}}</td>
                                                        <td>{{$expenditures->date}}</td>
                                                        <td>
                                                        <a href="/edit-expenditure-form/{{$expenditures->id}}" button class="btn btn-success">Edit</button></a>
                                                        <a href="/get-expenditure-details/{{$expenditures->id}}" button class="btn btn-primary">view more</button></a>
                                                        <a href="/delete-expenditure/{{$expenditures->id}}" button class="btn btn-danger">Delete</button></a>
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
