@extends('admin.layouts.app')

@section('title','Admin - Home')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                <h1 class="page-title">Welcome to Outplayed Pro</h1>
                <p class="page-subtitle">Go PRO or Go Home</p>
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#" class="active">Dashboards</a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <!-- TOP METRICS -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-metric_1 animate">
                        <span class="icon-wrapper custom-bg-orange"><i class="fa fa-area-chart"></i></span>
                        <div class="right">
                            <span class="value">$3642 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                            <span class="title">PROFIT
											<span class="change text-indicator-green">(+ $254)</span>
										</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-metric_1 animate">
                        <span class="icon-wrapper custom-bg-lightseagreen"><i class="fa fa-shopping-cart"></i></span>
                        <div class="right">
                            <span class="value">$8740 <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                            <span class="title">REVENUE
											<span class="change text-indicator-green">(+ $364)</span>
										</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-metric_1 animate">
                        <span class="icon-wrapper custom-bg-blue2"><i class="fa fa-user"></i></span>
                        <div class="right">
                            <span class="value">132567 <i class="change-icon change-down fa fa-sort-down text-indicator-red"></i></span>
                            <span class="title">TOTAL USER
											<span class="change text-indicator-red">(- 23)</span>
										</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-metric_1 animate">
                        <span class="icon-wrapper custom-bg-purple"><i class="fa fa-envelope"></i></span>
                        <div class="right">
                            <span class="value">56.72% <i class="change-icon change-up fa fa-sort-up text-indicator-green"></i></span>
                            <span class="title">CLICK
											<span class="change text-indicator-green">(+ 12.64%)</span>
										</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP METRICS -->

        </div>
    </div>

@endsection

