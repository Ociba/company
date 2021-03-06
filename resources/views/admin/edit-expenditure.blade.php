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
							<!-- Zero config table start -->
                            <div class="col-sm-12">
                                <div class="card">
                                <div class="card-header">
                                        <h5>Expenditure Form</h5>
                                    </div>
                                    <div class="card-body">
                                    @foreach($edit_expenditure as $expenditure)
                                    <form action="/update-expenditure/{{$expenditure->id}}" method="get">
                                     @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Item</label>
                                                <input type="text" class="form-control" name="item" value="{{$expenditure->item}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Item" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Quantity.</label>
                                                <input type="text" class="form-control" name="quantity" value="{{$expenditure->quantity}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Unit Price</label>
                                                <input type="text" class="form-control" name="unit" value="{{$expenditure->unit}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Particular</label>
                                                <input type="text" class="form-control" name="particulars" value="{{$expenditure->particulars}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Rate</label>
                                                <input type="text" class="form-control" name="rate" value="{{$expenditure->rate}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Unit Price</label>
                                                <input type="text" class="form-control" name="unit" value="{{$expenditure->unit}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Amount</label>
                                                <input type="text" class="form-control" name="amount" value="{{$expenditure->amount}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount" required>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="person" value="{{$expenditure->person}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Persons Name" required>
                                            </div>
                                            </div>
                                            <div class="col-md-12 text-center">      
                                            <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                            
                                            <a href="/get-expenditure" button class="btn waves-effect waves-light btn-warning">Back</button></a>
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
