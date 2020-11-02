<!-- page statustic card start -->
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-blue">{{number_format($total_amount)}} /=</h4>
                    <h6 class="font-weight-bold m-b-0">Total Income</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="feather icon-briefcase f-28"></i>
                </div>
            </div>
        </div>
        <div class="card-footer bg-c-blue">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0"></p>
                </div>
                <div class="col-3 text-right">
                    <i class="feather icon-trending-down text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-yellow">{{number_format($total_expenditure)}} /=</h4>
                    <h6 class="font-weight-bold m-b-0">Expenditure</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="fa fa-wallet f-28"></i>
                </div>
            </div>
        </div>
        <div class="card-footer bg-c-yellow">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">Shs.</p>
                </div>
                <div class="col-3 text-right">
                    <i class="feather icon-trending-up text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-green">{{ number_format($website_amount)}} /=</h4>
                    <h6 class="font-weight-bold m-b-0">Websites</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="ti-wordpress f-28"></i>
                </div>
            </div>
        </div>
        <div class="card-footer bg-c-green">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">{{$number_of_websites}}</p>
                </div>
                <div class="col-3 text-right">
                    <i class="feather icon-trending-up text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="text-c-red">{{number_format($web_app_amount)}} /=</h4>
                    <h6 class="font-weight-bold m-b-0">Web Apps</h6>
                </div>
                <div class="col-4 text-right">
                    <i class="ti-desktop f-28"></i>
                </div>
            </div>
        </div>
        <div class="card-footer bg-c-red">
            <div class="row align-items-center">
                <div class="col-9">
                    <p class="text-white m-b-0">{{$number_of_web_app}}</p>
                </div>
                <div class="col-3 text-right">
                    <i class="feather icon-trending-down text-white f-16"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page statustic card end -->
<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5>Income received per month in {{date('Y')}}</h5>
        </div>
        <div class="card-body">
           <canvas id="chart-bar-1" style="width: 100%; height: 300px"></canvas>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <!-- project-ticket start -->
    <div class="card proj-t-card">
        <div class="card-body">
            <span class="font-weight-bold">Mobile Applications</span>
            <div class="col-4 text-right">
                    <i class="ti-mobile f-28"></i>
            </div>
            <h3 class="dashboard-total-products counter">{{number_format($mobile_app_amount)}} /=</h3>
            <h6 class="pt-badge bg-danger">{{$number_of_mobile}}</h6>
        </div>
    </div>

    <div class="card proj-t-card">
        <div class="card-body">
            <span class="font-weight-bold">Graphics</span>
            <div class="col-4 text-right">
                    <i class="ti-layers f-28"></i>
            </div>
            <h3 class="dashboard-total-products counter">{{number_format($graphics)}} /=</h3>
           <h6 class="pt-badge bg-primary">{{$number_of_graphic}}</h6>
        </div>
    </div>

    <div class="card proj-t-card">
        <div class="card-body">
            <span class="font-weight-bold">Installations</span>
            <h3 class="dashboard-total-products"><span class="counter">{{number_format($installations)}} /=</span></h3>
            <div class="col-4 text-right">
                    <i class="ti-microsoft f-28"></i>
            </div>
            <h6 class="pt-badge bg-success">{{$number_of_installation}}</h6>
        </div>
    </div>
    <!-- project-ticket end -->
</div>

<script>
'use strict';
$(document).ready(function() {
    // [ bar-chart ] start
    var bar = document.getElementById("chart-bar-1").getContext('2d');
    var data1 = {
        labels: [{!! json_encode(auth()->user()->getMonthlyIncome()) !!}],
        datasets: [{
            label: "Total",
            data: [{!! auth()->user()->getAmountInJanuary() !!}, {!! auth()->user()->getAmountInFebruary() !!}, {!! auth()->user()->getAmountInMarch() !!}, {!! auth()->user()->getAmountInApril() !!}, {!! auth()->user()->getAmountInMay() !!}, {!! auth()->user()->getAmountInJune() !!},
             {!! auth()->user()->getAmountInJuly() !!}, {!! auth()->user()->getAmountInAugust() !!}, {!! auth()->user()->getAmountInSeptember() !!}, {!! auth()->user()->getAmountInOctober() !!}, {!! auth()->user()->getAmountInNovember() !!}, {!! auth()->user()->getAmountInDecember() !!}],
            borderColor: '#4680ff',
            backgroundColor: ['#4680ff','#B0BF1A','#B284BE','#C46210','#FF7E00','#008000','#DA1884','#3D2B1F',
                              '#FE6F5E','#FD3F92','#9EFD38','#014421'],
            hoverborderColor:'#4680ff',
            hoverBackgroundColor: '#4680ff',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'bar',
        data: data1,
        options: {
            barValueSpacing: 20
        }
    });
    // [ bar-chart ] end

    // [ bar-stacked-chart ] start
    var bar = document.getElementById("chart-bar-2").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3],
        datasets: [{
            label: "Data 1",
            data: [25, 45, 74, 85],
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            hoverborderColor:'#4680ff',
            hoverBackgroundColor: '#4680ff',
        }, {
            label: "Data 2",
            data: [30, 52, 65, 65],
            borderColor: '#7759de',
            backgroundColor: '#7759de',
            hoverborderColor:'#7759de',
            hoverBackgroundColor: '#7759de',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'bar',
        data: data1,
        options: {
            barValueSpacing: 20,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        },
    });
    // [ bar-stacked-chart ] end

    // [ bar-Horizontal-chart ] start
    var bar = document.getElementById("chart-bar-3").getContext('2d');
    var theme_g1 = bar.createLinearGradient(0, 300, 0, 0);
    var data1 = {
        labels: [0, 1, 2, 3],
        datasets: [{
            label: "Data 1",
            data: [25, 45, 74, 85],
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            hoverborderColor:'#4680ff',
            hoverBackgroundColor: '#4680ff',
        }, {
            label: "Data 2",
            data: [30, 52, 65, 65],
            borderColor: '#7759de',
            backgroundColor: '#7759de',
            hoverborderColor:'#7759de',
            hoverBackgroundColor: '#7759de',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'horizontalBar',
        data: data1,
        options: {
            barValueSpacing: 20
        }
    });
    // [ bar-Horizontal-chart ] end

    // [ line-chart ] start
    var bar = document.getElementById("chart-line-1").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [55, 70, 62, 81, 56, 70, 90],
            fill: false,
            borderWidth: 4,
            lineTension: 0,
            borderDash: [15, 10],
            borderColor: '#7759de',
            backgroundColor: '#7759de',
            hoverborderColor: '#7759de',
            hoverBackgroundColor: '#7759de',
        }, {
            label: "D2",
            data: [85, 55, 70, 50, 75, 45, 60],
            fill: true,
            cubicInterpolationMode: 'monotone',
            borderWidth: 0,
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            hoverborderColor: '#4680ff',
            hoverBackgroundColor: '#4680ff',
        }, {
            label: "D3",
            data: [50, 75, 80, 70, 85, 80, 70],
            fill: false,
            borderWidth: 4,
            borderColor: '#11c15b',
            backgroundColor: '#11c15b',
            hoverborderColor: '#11c15b',
            hoverBackgroundColor: '#11c15b',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'line',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ line-chart ] end

    // [ area-origin-chart ] start
    var bar = document.getElementById("chart-area-2").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [85, 55, 70, 50, 75, 45, 60],
            borderWidth: 1,
            borderColor: '#00ACC1',
            backgroundColor:'#00ACC1',
            hoverborderColor: '#00ACC1',
            hoverBackgroundColor:'#00ACC1',
            fill: 'origin',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'line',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ area-origin-chart ] end

    // [ area-end-chart ] start
    var bar = document.getElementById("chart-area-3").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [85, 55, 70, 50, 75, 45, 60],
            borderWidth: 1,
            borderColor: '#11c15b',
            backgroundColor: '#11c15b',
            hoverborderColor: '#11c15b',
            hoverBackgroundColor:'#11c15b',
            fill: 'end',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'line',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ area-end-chart ] end

    // [ area-chart ] Start
    var bar = document.getElementById("chart-area-1").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [45, 60, 45, 80, 60, 80, 45],
            fill: true,
            borderWidth: 4,
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            hoverborderColor: '#4680ff',
            hoverBackgroundColor: '#4680ff',
        }, {
            label: "D2",
            data: [45, 80, 45, 45, 60, 45, 80],
            fill: true,
            cubicInterpolationMode: 'monotone',
            borderWidth: 0,
            borderColor: '#7759de',
            backgroundColor: '#7759de',
            hoverborderColor: '#7759de',
            hoverBackgroundColor: '#7759de',
        }, {
            label: "D3",
            data: [83, 45, 60, 45, 45, 55, 45],
            fill: true,
            borderWidth: 4,
            borderColor: '#11c15b',
            backgroundColor: '#11c15b',
            hoverborderColor: '#11c15b',
            hoverBackgroundColor: '#11c15b',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'line',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ area-chart ] end

    // [ radar-chart1 ] Start
    var bar = document.getElementById("chart-radar-1").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [60, 60, 45, 80, 60, 80, 45],
            fill: true,
            borderWidth: 4,
            borderColor: '#4680ff',
            backgroundColor: '#4680ff',
            hoverborderColor: '#4680ff',
            hoverBackgroundColor: '#4680ff',
        }, {
            label: "D2",
            data: [40, 80, 40, 65, 60, 50, 95],
            fill: true,
            cubicInterpolationMode: 'monotone',
            borderWidth: 0,
            borderColor: '#7759de',
            backgroundColor: '#7759de',
            hoverborderColor: '#7759de',
            hoverBackgroundColor: '#7759de',
        }, {
            label: "D3",
            data: [20, 40, 80, 60, 85, 60, 20],
            fill: true,
            borderWidth: 4,
            borderColor: '#11c15b',
            backgroundColor: '#11c15b',
            hoverborderColor: '#11c15b',
            hoverBackgroundColor: '#11c15b',
        }]
    };
    var myBarChart = new Chart(bar, {
        type: 'radar',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ radar-chart1 ] end

    // [ radar-chart2 ] Start
    var bar = document.getElementById("chart-radar-2").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [60, 60, 45, 80, 60, 80, 45],
            fill: true,
            borderWidth: 4,
            borderColor: '#11c15b',
            backgroundColor: '#11c15b',
            hoverborderColor: '#11c15b',
            hoverBackgroundColor: '#11c15b',
        }, {
            label: "D2",
            data: [40, 80, 40, 65, 60, 50, 95],
            fill: true,
            cubicInterpolationMode: 'monotone',
            borderWidth: 0,
            borderColor: '#ff5252',
            backgroundColor: '#ff5252',
            hoverborderColor: '#ff5252',
            hoverBackgroundColor: '#ff5252',
        }, {
            label: "D3",
            data: [20, 40, 80, 60, 85, 60, 20],
            fill: true,
            borderWidth: 4,
            borderColor: '#ffa21d',
            backgroundColor: '#ffa21d',
            hoverborderColor: '#ffa21d',
            hoverBackgroundColor: '#ffa21d',
        }]
    };
    var BarChart = new Chart(bar, {
        type: 'radar',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ radar-chart2 ] end

    // [ radar-chart3 ] start
    var bar = document.getElementById("chart-radar-3").getContext('2d');
    var data1 = {
        labels: [0, 1, 2, 3, 4, 5, 6],
        datasets: [{
            label: "D1",
            data: [60, 60, 45, 80, 60, 80, 45],
            fill: true,
            borderWidth: 4,
            borderColor: '#4680ff',
            backgroundColor: "transparent",
            hoverborderColor: '#4680ff',
            hoverBackgroundColor: "transparent",
        }, {
            label: "D2",
            data: [40, 80, 40, 65, 60, 50, 95],
            fill: true,
            cubicInterpolationMode: 'monotone',
            borderWidth: 0,
            borderColor: '#7759de',
            backgroundColor: "transparent",
            hoverborderColor: '#7759de',
            hoverBackgroundColor: "transparent",
        }, {
            label: "D3",
            data: [20, 40, 80, 60, 85, 60, 20],
            fill: true,
            borderWidth: 4,
            borderColor: '#11c15b',
            backgroundColor: "transparent",
            hoverborderColor: '#11c15b',
            hoverBackgroundColor: "transparent",
        }]
    };
    var BarChart = new Chart(bar, {
        type: 'radar',
        data: data1,
        responsive: true,
        options: {
            barValueSpacing: 20,
            maintainAspectRatio: false,
        }
    });
    // [ radar-chart3 ] end

    // [ pie-chart ] start
    var bar = document.getElementById("chart-pie-1").getContext('2d');
    var data4 = {
        labels: [
            "Data 1",
            "Data 2",
            "Data 3"
        ],
        datasets: [{
            data: [30, 30, 40],
            backgroundColor: [
                '#11c15b',
                '#7759de',
                '#4680ff'
            ],
            hoverBackgroundColor: [
                '#11c15b',
                '#7759de',
                '#4680ff'
            ]
        }]
    };
    var myPieChart = new Chart(bar, {
        type: 'pie',
        data: data4,
        responsive: true,
        options: {
            maintainAspectRatio: false,
        }
    });
    // [ pie-chart ] end

    // [ Donut-chart ] start
    var bar = document.getElementById("chart-donut-1").getContext('2d');
    var data4 = {
        labels: [
            "Data 1",
            "Data 2",
            "Data 3"
        ],
        datasets: [{
            data: [30, 30, 40],
            backgroundColor: [
                '#11c15b',
                '#ffa21d',
                '#ff5252'
            ],
            hoverBackgroundColor: [
                '#11c15b',
                '#ffa21d',
                '#ff5252'
            ]
        }]
    };
    var myPieChart = new Chart(bar, {
        type: 'doughnut',
        data: data4,
        responsive: true,
        options: {
            maintainAspectRatio: false,
        }
    });
    // [ Donut-chart ] end
});

</script>