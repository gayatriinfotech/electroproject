@extends('header')
@section('content')
        <!-- sidebar wrapper -->

        

                    <!-- content starts -->
                    <div class="main-content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid px-lg-4">
                            <div class="row">
                                <div class="col-md-12 mt-lg-4 mt-4">
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <!-- <h1 class="h3 mb-0 text-gray-800">Basic Inputs</h1> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Begin Page Content -->
                        <div class="inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="white_card card_height_100 mb_30">
                                                    <div class="white_card_header">
                                                        <div class="box_header m-0">
                                                            <div class="main-title">
                                                                <h3 class="m-0">Vendors Form</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="white_card_body">

                                                        
                                                        <form action="{{route('vendor_data.store')}}" method="post" enctype="multipart/form-data"> 
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1"> Name</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  Name" name="name">
                                                                 @error('name')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
</div>
<div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
                                                                 @error('email')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
</div>
</div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Vendor Category</label>

                                                                <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Vendor Category" name="category">
                                                                    <option value="">Select Vendor Category</option>
                                                                    @foreach($cate as $c)
                                                                    <option value="{{$c->id}}">{{$c->cname}}</option>
                                                                    @endforeach
                                                                </select>
                                                                 @error('category')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Contact</label>
                                                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Contact" name="contact">
                                                                 @error('contact')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Address</label>
                                                                <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" name="address"></textarea>
                                                                 @error('address')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Store Name</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Store Name" name="store_name">
                                                                 @error('store_name')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Total Chairs</label>
                                                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Total Chairs" name="total_chairs">
                                                                 @error('total_chairs')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Total Tables</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Total Tables" name="total_tables">
                                                                 @error('total_tables')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">City</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter City" name="city">
                                                                 @error('city')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">State</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter State" name="state">
                                                                 @error('state')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Start Date</label>
                                                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Start Date" name="start_date">
                                                                 @error('start_date')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">End Date</label>
                                                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter End Date" name="end_date">
                                                                 @error('end_date')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content Ends -->
                </div>
            </div>
        </div>
        <!-- Page content -->


    </div>
@endsection