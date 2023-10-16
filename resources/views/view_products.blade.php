@extends('header')
@section('content')
      
<?php
                                                                    $usertype=Session::get('username');
                                                                    
                                                                    ?>
                    <!-- content starts -->
                    <div class="main-content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Product Details</h1>
                                        <a href="/product/create" style="margin-right:5%;margin-top:5%;"><button class="btn btn-success">Add New</button></a>
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
                                                                        <?php
                                                                        if($usertype!="vendor")
                                                                        {
                                                                        ?>
                                                                        <th>Vendor Name</th>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <th>Product Category Name</th>
                                                                        <th>Product Name</th>
                                                                        <th>Image</th>
                                                                        <th>Description</th>
                                                                        <th>Price</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                   
                                                                @foreach($product as $c)
                                                               
                                                               <tr>
                                                                        <td>{{$c->pid}}</td>
                                                                        <?php
                                                                        if($usertype!="vendor")
                                                                        {
                                                                        ?>
                                                                       <td>{{$c->name}}</td>
                                                                       <?php
                                                                        }
                                                                       ?>
                                                                        <td>{{$c->subcate_name}}</td>
                                                                        <td>{{$c->pname}}</td>
                                                                        <td><img src="images/{{$c->pimg}}" height="100" width="100"></td>
                                                                        <td>{!!$c->description!!}</td>
                                                                        <td>{{$c->price}}</td>
                                                                        <td>{{$c->subcate_status}}</td>
                                                                        <td>
                                                                            <a href="{{route('product.edit',$c->pid)}}"><i class="ti ti-marker-alt"></i></a>
                                                                            <form method="post" action="{{route('product.destroy',$c->pid)}}">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"><i class="ti ti-trash"></i></button>
</a>
                                                                        </td>
                                                                        
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