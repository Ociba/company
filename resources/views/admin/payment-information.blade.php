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
                                                    <h5 class="m-b-10">Payment</h5>
                                                </div>
                                                <ul class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                                    <li class="breadcrumb-item"><a href="#!">Payment Details</a></li>
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
                                        <div class="card">
                                            <div class="row invoice-contact">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-body text-center">
                                                                <h5 class="m-b-10 text-center">JAAJA IT SOLUTIONS</h5>
                                                                <h5 class="m-b-10 text-center">Uganda-Kampala</h5>
                                                                <h6 class="text-center">Plot No. 9</h6>
                                                                <h6 class="m-b-10 text-center">Behind King Ceasor Plaza</h6>
                                                                <h6 class="m-b-10 text-center">Portal Avenue</h6>
                                                                <h6 class="m-b-10 text-center">Opposite Christ The King Church</h6>
                                                                <h6 class="m-b-10 text-center">0777745520 | 0776913451</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                            <div class="card-body">
                                                @foreach($get_payment_information as $payment)
                                                <div class="row invoive-info">
                                                    <div class="col-md-4 col-xs-12 invoice-client-info">
                                                        <h6>Client Information :</h6>
                                                        <h6 class="m-0">{{$payment->company}}</h6>
                                                        <p class="m-0 m-t-10">{{$payment->phone}}</p>
                                                        {{--
                                                        <p class="m-0">(1234) - 567891</p>
                                                        --}}
                                                        <p><a class="text-secondary" href="mailto:demo@gmail.com" target="_top">{{$payment->company_email}}</a></p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <h6>Order Information :</h6>
                                                        <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Date :</th>
                                                                    <td>{{ date('F d, Y', strtotime($payment->created_at))}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Item :</th>
                                                                    <td>
                                                                        <span>{{$payment->item}}</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Payment No. :</th>
                                                                    <td>
                                                                        #0000{{$payment->id}}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <h6 class="m-b-20">Time <span>{{ date('g:ia', strtotime($payment->created_at))}}</span></h6>
                                                        <h6 class="text-uppercase text-primary">Total Amount :
                                                            <span>{{ number_format($payment->amount)}}</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table invoice-detail-table">
                                                                <thead>
                                                                    <tr class="thead-default">
                                                                        <th>Item</th>
                                                                        <th>Paid</th>
                                                                        <th>Balance</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h6>{{$payment->item}}</h6>
                                                                        </td>
                                                                        <td>{{$payment->paid}}</td>
                                                                        <td>{{$payment->balance}}</td>
                                                                        <td>{{$payment->status}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <h5 class="btn btn-light">Printed by {{auth()->user()->name}} on {{ date('F d, Y', strtotime($payment->created_at))}} at {{ date('g:ia', strtotime($payment->created_at))}}</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h6>Terms and Condition :</h6>
                                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        </p>
                                                    </div>
                                                </div>
                                                @endforeach
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