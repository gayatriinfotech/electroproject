@extends('header')
@section('content')
<?php
                // session_start();
                //   $user= request()-session()->get('user');
                //   print_r($user);

                $usertype=Session::get('username');
                // print_r($usertype);
                // exit();
                ?>
                    <div class="main-content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Vendors Details</h1>
                                        <a href="/vendor_data/create" style="margin-right:5%;margin-top:5%;"><button class="btn btn-success">Add New</button></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Begin Page Content -->


                    </div>
                    <!-- content Ends -->
                    <div class="main-content pt-0">
                        <div class="inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="white_card card_height_100 mb_30">
                                                    <div class="white_card_body pt-3">
                                                        <div class="QA_section">
                                                            <table id="example" class="display" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Vendor Category</th>
                                                                        <th>Contact</th>
                                                                        <th>Store Name</th>
                                                                        <th>Store Number</th>
                                                                        @if($usertype=="super")
                                                                        <th>Action</th>
                                                                        @endif
                                                                        <th>QR Code</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($vendors as $c)
                                                               
                                                               <tr>
                                                                        <td>{{$c->vid}}</td>
                                                                        <td>{{$c->name}}</td>
                                                                        <td>{{$c->email}}</td>
                                                                        <td>{{$c->cname}}</td>
                                                                        <td>{{$c->contact}}</td>
                                                                        <td>{{$c->store_name}}</td>
                                                                        <td>{{$c->store_number}}</td>
                                                                        @if($usertype=="super")
                                                                        
                                                                        <td>
                                                                            <a href="{{route('vendor_data.edit',$c->vid)}}"><i class="ti ti-marker-alt"></i></a>
                                                                            <form method="post" action="{{route('vendor_data.destroy',$c->vid)}}">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                            <button type="submit"><i class="ti ti-trash"></i></button>
</form>
                                                                        </td>
                                                                        <td>{!! QrCode::size(50)->generate('http://localhost:8000/enquire') !!}</td>
                                                                        @endif
                                                                    </tr>
                                                               
                                                                @endforeach
                                                                </tbody>
                                                            </table>
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
                </div>
            </div>
        </div>
        <!-- Page content -->


    </div>
@endsection