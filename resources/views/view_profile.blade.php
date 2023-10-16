@extends('header')
@section('content')
      

                    <!-- content starts -->
                    <div class="main-content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                                        <!-- <a href="/product/create" style="margin-right:5%;margin-top:5%;"><button class="btn btn-success">Add New</button></a> -->
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
                                                            <table id="" class="display" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th> Name</th>
                                                                        <th>Email</th>
                                                                       
                                                                        <th>Action</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                               
                                                               <tr>
                                                                        <td>{{$vendor->id}}</td>
                                                                        <td>{{$vendor->name}}</td>
                                                                        <td>{{$vendor->email}}</td>
                                                                        
                                                                        <td>
                                                                            <a href="{{route('vendor_data.edit',$vendor->id)}}"><i class="ti ti-marker-alt"></i></a>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                               
                                                              
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