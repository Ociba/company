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