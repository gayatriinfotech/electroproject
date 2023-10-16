<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_subcategory;
use App\Models\tbl_vendor;
use App\Models\tbl_product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $username = session('username');
        $vendor_id = session('vendor_name.vendor_id');
        if($username=='vendor')
        {
            $product=tbl_product::join('tbl_subcategories','tbl_subcategories.id','=','tbl_products.subcate_id')->join('tbl_vendors','tbl_vendors.id','=','tbl_products.vendor_id')->select('*','tbl_subcategories.id as subid','tbl_products.id as pid','tbl_products.image as pimg')->where('tbl_vendors.id','=',$vendor_id)->get();
            return view('view_products',compact('product'));    
        }
        else
        {
            $product=tbl_product::join('tbl_subcategories','tbl_subcategories.id','=','tbl_products.subcate_id')->join('tbl_vendors','tbl_vendors.id','=','tbl_products.vendor_id')->select('*','tbl_subcategories.id as subid','tbl_products.id as pid','tbl_products.image as pimg')->get();
            return view('view_products',compact('product'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendor=tbl_vendor::get();
        $subcate=tbl_subcategory::get();
        return view('add_product',compact('vendor','subcate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vendor_id'=>'required',
            'categoryname'=>'required',
            'pname'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'image'=>'required',
        ]);
        $cname=$request->get('vendor_id');
        $sname=$request->get('categoryname');
        $pname=$request->get('pname');
        $desc=$request->get('desc');
        $price=$request->get('price');
        $discount=$request->get('discount');
        $img=$request->file('image');
        $imagetemp=$img->getClientOriginalName();
        $img->move('images',$imagetemp);
        $product=new tbl_product([
            'pname'=>$pname,
            'description'=>$desc,
            'price'=>$price,
            'discount'=>$discount,
            'vendor_id'=>$cname,
            'subcate_id'=>$sname,
            'status'=>'active',
            'image'=>$imagetemp
        ]);
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendor=tbl_vendor::get();
        $subcate=tbl_subcategory::get();
        $product=tbl_product::join('tbl_subcategories','tbl_subcategories.id','=','tbl_products.subcate_id')->select('*','tbl_subcategories.id as subid','tbl_products.id as pid','tbl_products.image as pimg')->where('tbl_products.id','=',$id)->first();
        return view('edit_product',compact('product','vendor','subcate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'vendor_id'=>'required',
            'categoryname'=>'required',
            'pname'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'discount'=>'required',
            
        ]);
        $cname=$request->get('vendor_id');
        $sname=$request->get('categoryname');
        $pname=$request->get('pname');
        $desc=$request->get('desc');
        $price=$request->get('price');
        $discount=$request->get('discount');
        $img=$request->file('image');
        $status=$request->get('status');
        if($img=="")
        {
            $product=tbl_product::find($id);
            $product->pname=$pname;
            $product->vendor_id=$cname;
            $product->subcate_id=$sname;
            $product->description=$desc;
            $product->price=$price;
            $product->discount=$discount;
            $product->status=$status;
            $product->update();
            return redirect('/product');

        }
        else{
            $img=$request->file('image');
            $imagetemp=$img->getClientOriginalName();
            $img->move('images',$imagetemp);
            $product=tbl_product::find($id);
            $product->pname=$pname;
            $product->vendor_id=$cname;
            $product->subcate_id=$sname;
            $product->description=$desc;
            $product->price=$price;
            $product->discount=$discount;
            $product->status=$status;
            $product->image=$imagetemp;
            $product->update();
            return redirect('/product');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=tbl_product::find($id);
        $product->delete();
        return redirect('/product');
    }
}
