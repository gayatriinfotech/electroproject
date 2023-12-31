@extends('content')
@section('header')
        <!-- Page-content -->
        <div id="page-content-wrapper">
            <div id="content">
                <div class="container-fluid p-0 px-lg-0 px-md-0">
                    <div class="main-content pt-0">
                        <nav class="navbar navbar-expand navbar-light my-navbar justify-content-between">
                            <div type="button" id="bar" class="nav-icon1 humburger animated fadeInLeft  sidebar_icon" data-toggle="offcanvas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <!-- Top bar Search -->
                            <form class="d-none d-sm-inline-block form-inline navbar-search px-3">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control bg-light" placeholder="Search for..">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="far fa-search fa-sm"></i></button>
                                    </div>
                                </div>
                            </form>

                            <!-- Top Bar nav -->
                            <div class="header_right d-flex justify-content-end align-items-center">
                                <div class="header_notification_warp d-flex align-items-center">
                                    <li>
                                        <a class="CHATBOX_open nav-link-notify" href="#"> <i class="far fa-envelope"></i> </a>
                                    </li>
                                    <li>
                                        <a class="bell_notification_clicker nav-link-notify" href="#"> <i class="far fa-bell fa-fw"></i>
                                            <!-- <span>2</span> -->
                                        </a>
                                    </li>

                                </div>
                                <div class="profile_info d-flex align-items-center">
                                    <div class="profile_thumb mr_20">
                                        <img src="images/1.png" alt="#">
                                    </div>
                                    <div class="author_name">
                                        <h4 class="f_s_15 f_w_500 mb-0">Jiue Anderson</h4>
                                        <p class="f_s_12 f_w_400">Manager</p>
                                    </div>
                                    <div class="profile_info_iner">
                                        <div class="profile_author_name">
                                            <p>Manager</p>
                                            <h5>Jiue Anderson</h5>
                                        </div>
                                        <div class="profile_info_details">
                                            <a href="#">My Profile </a>
                                            <a href="#">Settings</a>
                                            <a href="#">Log Out </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Bar nav -->
                            <!-- Top bar Search -->
                        </nav>
                    </div>
                    <div class="main-content1">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="overview-wrap">
                                            <h2 class="title-1">overview</h2>
                                            <button class="au-btn au-btn-icon au-btn--blue">
                                                <i class="far fa-plus"></i>add item</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c1">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <div class="icon">
                                                        <i class="far fa-user"></i>
                                                    </div>
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="10368" data-speed="1500"></h2>
                                                        <span>members online</span>
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
                                                    <div class="icon">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </div>
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="388688" data-speed="1500"></h2>
                                                        <span>items solid</span>
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
                                                    <div class="icon">
                                                        <i class="far fa-calendar-week"></i>
                                                    </div>
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="108665" data-speed="1500"></h2>
                                                        <span>this week</span>
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
                                                    <div class="icon">
                                                        <i class="far fa-dollar-sign"></i>
                                                    </div>
                                                    <div class="text">
                                                        <h2 class="timer count-title count-number" data-to="1060386" data-speed="1500"></h2>
                                                        <span>total earnings</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="au-card recent-report">
                                            <div class="au-card-inner">
                                                <h3 class="title-2">recent reports</h3>
                                                <div class="chart-info">
                                                    <div class="chart-info__left">
                                                        <div class="chart-note">
                                                            <span class="dot dot--blue"></span>
                                                            <span>products</span>
                                                        </div>
                                                        <div class="chart-note mr-0">
                                                            <span class="dot dot--green"></span>
                                                            <span>services</span>
                                                        </div>
                                                    </div>
                                                    <div class="chart-info__right">
                                                        <div class="chart-statis">
                                                            <span class="index incre">
                                                                <i class="fal fa-arrow-up"></i>25%</span>
                                                            <span class="label">products</span>
                                                        </div>
                                                        <div class="chart-statis mr-0">
                                                            <span class="index decre">
                                                                <i class="fal fa-arrow-down"></i>10%</span>
                                                            <span class="label">services</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="recent-report__chart">
                                                    <canvas id="myChart4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="au-card chart-percent-card">
                                            <div class="au-card-inner">
                                                <h3 class="title-2 tm-b-5">char by %</h3>
                                                <div class="row no-gutters">
                                                    <div class="col-xl-6">
                                                        <div class="chart-note-wrap">
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--blue"></span>
                                                                <span>products</span>
                                                            </div>
                                                            <div class="chart-note mr-0 d-block">
                                                                <span class="dot dot--red"></span>
                                                                <span>services</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="percent-chart">
                                                            <canvas id="doughnut-chart" width="594" height="560"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                        <div class="table-responsive table--no-card m-b-40">
                                            <table class="table table-borderless table-striped table-earning">
                                                <thead>
                                                    <tr>
                                                        <th>date</th>
                                                        <th>order ID</th>
                                                        <th>name</th>
                                                        <th class="text-right">price</th>
                                                        <th class="text-right">quantity</th>
                                                        <th class="text-right">total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2018-09-29 05:57</td>
                                                        <td>100398</td>
                                                        <td>iPhone X 64Gb Grey</td>
                                                        <td class="text-right">$999.00</td>
                                                        <td class="text-right">1</td>
                                                        <td class="text-right">$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-28 01:22</td>
                                                        <td>100397</td>
                                                        <td>Samsung S8 Black</td>
                                                        <td class="text-right">$756.00</td>
                                                        <td class="text-right">1</td>
                                                        <td class="text-right">$756.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-27 02:12</td>
                                                        <td>100396</td>
                                                        <td>Game Console Controller</td>
                                                        <td class="text-right">$22.00</td>
                                                        <td class="text-right">2</td>
                                                        <td class="text-right">$44.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-26 23:06</td>
                                                        <td>100395</td>
                                                        <td>iPhone X 256Gb Black</td>
                                                        <td class="text-right">$1199.00</td>
                                                        <td class="text-right">1</td>
                                                        <td class="text-right">$1199.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-25 19:03</td>
                                                        <td>100393</td>
                                                        <td>USB 3.0 Cable</td>
                                                        <td class="text-right">$10.00</td>
                                                        <td class="text-right">3</td>
                                                        <td class="text-right">$30.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-29 05:57</td>
                                                        <td>100392</td>
                                                        <td>Smartwatch 4.0 LTE Wifi</td>
                                                        <td class="text-right">$199.00</td>
                                                        <td class="text-right">6</td>
                                                        <td class="text-right">$1494.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-24 19:10</td>
                                                        <td>100391</td>
                                                        <td>Camera C430W 4k</td>
                                                        <td class="text-right">$699.00</td>
                                                        <td class="text-right">1</td>
                                                        <td class="text-right">$699.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-22 00:43</td>
                                                        <td>100393</td>
                                                        <td>USB 3.0 Cable</td>
                                                        <td class="text-right">$10.00</td>
                                                        <td class="text-right">3</td>
                                                        <td class="text-right">$30.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <h2 class="title-1 m-b-25">Top countries</h2>
                                        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                            <div class="au-card-inner">
                                                <div class="table-responsive">
                                                    <table class="table table-top-countries">
                                                        <tbody>
                                                            <tr>
                                                                <td>United States</td>
                                                                <td class="text-right">$119,366.96</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Australia</td>
                                                                <td class="text-right">$70,261.65</td>
                                                            </tr>
                                                            <tr>
                                                                <td>United Kingdom</td>
                                                                <td class="text-right">$46,399.22</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Turkey</td>
                                                                <td class="text-right">$35,364.90</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Germany</td>
                                                                <td class="text-right">$20,366.96</td>
                                                            </tr>
                                                            <tr>
                                                                <td>France</td>
                                                                <td class="text-right">$10,366.96</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Australia</td>
                                                                <td class="text-right">$5,366.96</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Italy</td>
                                                                <td class="text-right">$1639.32</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="fas fa-calendar-minus"></i>26 April, 2018</h3>
                                                <button class="au-btn-plus">
                                                    <i class="far fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="au-task js-list-load">
                                                <div class="au-task__title">
                                                    <p>Tasks for John Doe</p>
                                                </div>
                                                <div class="au-task-list js-scrollbar3">
                                                    <div class="au-task__item au-task__item--danger">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Meeting about plan for Admin Template 2018</a>
                                                            </h5>
                                                            <span class="time">10:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--warning">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Create new task for Dashboard</a>
                                                            </h5>
                                                            <span class="time">11:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--primary">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Meeting about plan for Admin Template 2018</a>
                                                            </h5>
                                                            <span class="time">02:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--success">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Create new task for Dashboard</a>
                                                            </h5>
                                                            <span class="time">03:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--danger js-load-item" style="display: none;">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Meeting about plan for Admin Template 2018</a>
                                                            </h5>
                                                            <span class="time">10:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--warning js-load-item" style="display: none;">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Create new task for Dashboard</a>
                                                            </h5>
                                                            <span class="time">11:00 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-task__footer">
                                                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="fas fa-comment-alt-lines"></i>New Messages</h3>
                                                <button class="au-btn-plus">
                                                    <i class="far fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="au-inbox-wrap js-inbox-wrap">
                                                <div class="au-message js-list-load">
                                                    <div class="au-message__noti">
                                                        <p>You Have
                                                            <span>2</span> new messages
                                                        </p>
                                                    </div>
                                                    <div class="au-message-list">
                                                        <div class="au-message__item unread">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap">
                                                                        <div class="avatar">
                                                                            <img src="images/1.png" alt="John Smith">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">John Smith</h5>
                                                                        <p>Have sent a photo</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>12 Min ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item unread">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="images/1.png" alt="Nicholas Martinez">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">Nicholas Martinez</h5>
                                                                        <p>You are now connected on message</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>11:00 PM</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="images/1.png" alt="Michelle Sims">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">Michelle Sims</h5>
                                                                        <p>Lorem ipsum dolor sit amet</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>Yesterday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap">
                                                                        <div class="avatar">
                                                                            <img src="images/1.png" alt="Michelle Sims">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">Michelle Sims</h5>
                                                                        <p>Purus feugiat finibus</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>Sunday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item js-load-item" style="display: none;">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="images/1.png" alt="Michelle Sims">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">Michelle Sims</h5>
                                                                        <p>Lorem ipsum dolor sit amet</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>Yesterday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item js-load-item" style="display: none;">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap">
                                                                        <div class="avatar">
                                                                            <img src="images/1.png" alt="Michelle Sims">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">Michelle Sims</h5>
                                                                        <p>Purus feugiat finibus</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>Sunday</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-message__footer">
                                                        <button class="au-btn au-btn-load js-load-btn">load more</button>
                                                    </div>
                                                </div>
                                                <div class="au-chat">
                                                    <div class="au-chat__title">
                                                        <div class="au-chat-info">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar avatar--small">
                                                                    <img src="images/1.png" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <span class="nick">
                                                                <a href="#">John Smith</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="au-chat__content">
                                                        <div class="recei-mess-wrap">
                                                            <span class="mess-time">12 Min ago</span>
                                                            <div class="recei-mess__inner">
                                                                <div class="avatar avatar--tiny">
                                                                    <img src="images/1.png" alt="John Smith">
                                                                </div>
                                                                <div class="recei-mess-list">
                                                                    <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                                    <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="send-mess-wrap">
                                                            <span class="mess-time">30 Sec ago</span>
                                                            <div class="send-mess__inner">
                                                                <div class="send-mess-list">
                                                                    <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-chat-textfield">
                                                        <form class="au-form-icon">
                                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                            <button class="au-input-icon">
                                                                <i class="fas fa-camera"></i>
                                                            </button>
                                                        </form>
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