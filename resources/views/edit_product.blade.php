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
                                                                <h3 class="m-0">Product Form</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="white_card_body">

                                                        
                                                        <form action="{{route('product.update',$product->pid)}}" method="post" enctype="multipart/form-data"> 
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Vendor Name</label>
                                                                <select type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="vendor_id">
                                                                    @foreach($vendor as $c)
                                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('categoryname')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Sub Category Name</label>
                                                                <select type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="categoryname">
                                                                    @foreach($subcate as $c)
                                                                    <option value="{{$c->id}}">{{$c->subcate_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('categoryname')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Name</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" name="pname" value="{{$product->pname}}">
                                                                @error('pname')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Price</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price" name="price" value="{{$product->price}}">
                                                                @error('price')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Discount</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Discount" name="discount" value="{{$product->discount}}">
                                                                @error('discount')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Image</label>
                                                                <img src="{{asset('images')}}/{{$product->pimg}}" style="width:100px;height:100px;">
                                                                <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Image" name="image">
                                                               
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Description</label>
                                                                <textarea id="summernote" cols="30" rows="30" class="form-control" name="desc">{{$product->description}}</textarea>
                                                                @error('desc')
                                                                <span style="font-size:18px;color:red;">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Status</label>
                                                                <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name" name="status">
                                                                <option value="active">Active</option>
                                                                <option value="inactive">Inactive</option>
                                                                </select>
                                                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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