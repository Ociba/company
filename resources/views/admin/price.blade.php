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
                                    </div>
                                        <!-- [ stiped-table ] start -->
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item</th>
                                                        <th>Specifications</th>
                                                        <th>Cost</th>
                                                        <th>Total Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Website</td>
                                                        <td>Labour(without Logo)</td>
                                                        <td>500,000</td>
                                                        <td class="font-weight-bold">500,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Maintenance(After 3Months)</td>
                                                        <td>200,000</td>
                                                        <td class="font-weight-bold">200,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Logo(optional)</td>
                                                        <td>300,000</td>
                                                        <td class="font-weight-bold">300,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Web Applications</td>
                                                        <td>Labour(without Logo)</td>
                                                        <td>500,000</td>
                                                        <td class="font-weight-bold">500,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Logo(optional)</td>
                                                        <td>300,000</td>
                                                        <td class="font-weight-bold">300,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Mobile Applications</td>
                                                        <td>Labour(without Logo)</td>
                                                        <td>500,000</td>
                                                        <td class="font-weight-bold">500,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Logo(optional)</td>
                                                        <td>300,000</td>
                                                        <td class="font-weight-bold">300,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            <!-- [ stiped-table ] end -->
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
