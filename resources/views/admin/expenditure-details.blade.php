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
        <section class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- [ breadcrumb ] start -->
                                <div class="page-header">
                                    <div class="page-block">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <div class="page-header-title">
                                                </div>
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                    <li class="breadcrumb-item"><a href="#!">Expenditure</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ breadcrumb ] end -->
                                <!-- [ Main Content ] start -->
                                <div class="row">
                                    <!-- [ Invoice ] start -->
                                    <div class="container" id="printTable">
                                        <div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="card card-border-c-blue">
                                                                <div class="card-body">
                                                                    <div class="mb-3">
                                                                        <h5 class="m-b-10 text-center">JAAJA IT SOLUTIONS</h5>
                                                                        <h5 class="m-b-10 text-center">Uganda-Kampala</h5>
                                                                        <h6 class="text-center">Plot No. 9</h6>
                                                                        <h6 class="m-b-10 text-center">Behind King Ceasor Plaza</h6>
                                                                        <h6 class="m-b-10 text-center">Portal Avenue</h6>
                                                                        <h6 class="m-b-10 text-center">Opposite Christ The King Church</h6>
                                                                        <h6 class="m-b-10 text-center">0777745520 | 0776913451</h6>
                                                                        @foreach($get_expenditure as $expenditure)
                                                                        <div class="row">
                                                                            <div class="card col-12">
                                                                                <div class="card-footer justify-content-sm-between align-items-sm-center">
                                                                                    <div class="media">
                                                                                        <div class="mr-3">
                                                                                            <span>
                                                                                            <span class="badge badge-mark border-danger mr-2"></span>
                                                                                            <span class="font-weight-bold">Received By</span>
                                                                                            <span class="font-weight-semibold">{{$expenditure->person}}</span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="mb-0"></h6>
                                                                                            <span class="text-muted"></span>
                                                                                        </div>
                                                                                        <div class="ml-3 align-self-center">
                                                                                            <div class="list-icons">
                                                                                                <div class="text-sm-right mb-0 mt-sm-0 ml-auto">
                                                                                                    <ul class="list list-unstyled mb-0">
                                                                                                        <li class="pull-right"><span class="font-weight-bold">Quantity: </span> <span class="font-weight-semibold"></span>{{$expenditure->quantity}}</li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <div class="media">
                                                                                        <div class="mr-3">
                                                                                            <div>
                                                                                                <h6 class="font-weight-semibold">Unit Price: {{$expenditure->unit}}</h6>
                                                                                                <ul class="list list-unstyled mb-3">
                                                                                                    <li><span class="font-weight-semibold">Date: </span>{{$expenditure->date}}</li>
                                                                                                </ul>
                                                                                                <h6>Received by sign.................</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="mb-0"></h6>
                                                                                            <span class="text-muted"></span>
                                                                                        </div>
                                                                                        <div class="ml-3 align-self-center">
                                                                                            <div class="list-icons">
                                                                                                <div class="text-sm-right mb-0 mt-sm-0 ml-auto">
                                                                                                    <h6 class="font-weight-semibold">Amount: {{$expenditure->amount}}</h6>
                                                                                                    <ul class="list list-unstyled mb-3">
                                                                                                        <li>Time <span class="font-weight-semibold"></span>{{ date('g:ia', strtotime($expenditure->created_at))}}</li>
                                                                                                    </ul>
                                                                                                    <h6>Paid by sign.................</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-12 text-center">
                                                                                <h5 class="btn btn-light">Printed by ociba james on 20/10/2020 at 11:20AM</h5>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <h6>Terms and Condition :</h6>
                                                                                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                                                </p>
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
                                        {{--
                                        <div class="row text-center">
                                            <div class="col-sm-12 invoice-btn-group text-center">
                                                <button type="button" class="btn waves-effect waves-light btn-primary btn-print-invoice m-b-10">Print</button>
                                            </div>
                                        </div>
                                        --}}
                                    </div>
                                </div>
                                <!-- [ Invoice ] end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- [ Main Content ] end -->
        @include('layouts.javascript')
        <script>
            // print button
            function printData() {
                var divToPrint = document.getElementById("printTable");
                newWin = window.open("");
                newWin.document.write(divToPrint.outerHTML);
                newWin.print();
                newWin.close();
            }
            
            $('.btn-print-invoice').on('click', function() {
                printData();
            })
        </script>
    </body>
</html>