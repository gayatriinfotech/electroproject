@extends('header')
@section('content')
       
                    <div class="main-content1">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="overview-wrap">
                                            <h2 class="title-1">overview</h2>
                                            <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                                <i class="far fa-plus"></i>add item</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c1">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <!-- <div class="icon">
                                                        <i class="far fa-user"></i>
                                                    </div> -->
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="{{$cate}}" data-speed="{{$cate}}"></h2>
                                                        <span>Category</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">
                                                    <!-- <canvas id="speedChart" width="282" height="196"></canvas> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c2">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <!-- <div class="icon">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </div> -->
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="{{$subc}}" data-speed="{{$subc}}"></h2>
                                                        <span>Sub Category</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c3">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <!-- <div class="icon">
                                                        <i class="far fa-calendar-week"></i>
                                                    </div> -->
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="{{$product}}" data-speed="{{$product}}"></h2>
                                                        <span>Products</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c4">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <!-- <div class="icon">
                                                        <i class="far fa-dollar-sign"></i>
                                                    </div> -->
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="{{$vendor}}" data-speed="{{$vendor}}"></h2>
                                                        <span>Vendors</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                </div>
                                
                               
                                
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->


    </div>

   @endsection