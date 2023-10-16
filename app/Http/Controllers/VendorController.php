<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_vendor;
use App\Models\tbl_category;
use App\Models\User;
use Session;
use DB;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$vendors=tbl_vendor::get();
        $vendors=DB::table('tbl_vendors')->join('tbl_categories','tbl_categories.id','=','tbl_vendors.category')->select('*','tbl_categories.id as cid','tbl_vendors.id as vid')->get();
        return view('view_vendors',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate=tbl_category::get();
        return view('add_vendors',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'store_name'=>'required',
            'total_chairs'=>'required',
            'total_tables'=>'required',
            'city'=>'required',
            'state'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'category'=>'required'
        ]);
        
        $name=$request->get('name');
        $email=$request->get('email');
        $contact=$request->get('contact');
        $address=$request->get('address');
        $sname=$request->get('store_name');
        $store_num=rand(100,1000);
        $totalchairs=$request->get('total_chairs');
        $total_table=$request->get('total_tables');
        $city=$request->get('city');
        $state=$request->get('state');
        $sdate=$request->get('start_date');
        $edate=$request->get('end_date');
        $category=$request->get('category');
        $vendoremail=tbl_vendor::where('email','=',$email)->count();
        if($vendoremail=='1')
        {
            echo "<script>
            alert('Email Already Exits');
            window.location.href='/vendor_data';
            </script>";
        }
        else
        {
            $vendors=new tbl_vendor([
                'name'=>$name,
                'email'=>$email,
                'contact'=>$contact,
                'address'=>$address,
                'store_name'=>$sname,
                'store_number'=>$store_num,
                'total_chairs'=>$totalchairs,
                'total_tables'=>$total_table,
                'city'=>$city,
                'state'=>$state,
                'start_date'=>$sdate,
                'end_date'=>$edate,
                'status'=>'active',
                'category'=>$category
            ]);
            $vendors->save();

            $user=new User([
                'name'=>$name,
                'email'=>$email,
                'password'=>$name,
                'usertype'=>'vendor'
            ]);
            $user->save();
            return redirect('/vendor_data');
        }
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
        //$vendors=tbl_vendor::find($id);
        $vendors=DB::table('tbl_vendors')->join('tbl_categories','tbl_categories.id','=','tbl_vendors.category')->where('tbl_vendors.id','=',$id)->select('*','tbl_categories.id as cid')->first();
        $cate=tbl_category::get();
        return view('edit_vendors',compact('vendors','cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'store_name'=>'required',
            'total_chairs'=>'required',
            'total_tables'=>'required',
            'city'=>'required',
            'state'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'category'=>'required'
        ]);
        $name=$request->get('name');
        $email=$request->get('email');
        $contact=$request->get('contact');
        $address=$request->get('address');
        $sname=$request->get('store_name');
        $totalchairs=$request->get('total_chairs');
        $total_table=$request->get('total_tables');
        $city=$request->get('city');
        $state=$request->get('state');
        $sdate=$request->get('start_date');
        $edate=$request->get('end_date');
        $status=$request->get('status');
        $category=$request->get('category');
        $vendor=tbl_vendor::find($id);
        $vendor->name=$name;
        $vendor->email=$email;
        $vendor->contact=$contact;
        $vendor->address=$address;
        $vendor->store_name=$sname;
        $vendor->total_chairs=$totalchairs;
        $vendor->total_tables=$total_table;
        $vendor->city=$city;
        $vendor->state=$state;
        $vendor->start_date=$sdate;
        $vendor->end_date=$edate;
        $vendor->status=$status;
        $vendor->category=$category;
        $vendor->update();
        $usertype=Session::get('username');
        if($usertype=="vendor")
        {
            return redirect('/vendor_profile');
        }
        else
        {
            return redirect('/vendor_data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendors=tbl_vendor::find($id);
        $vendors->delete();
        return redirect('/vendor_data');
    }
    public function vendor_profile()
    {
        
        $vemail=Session::get('vendor_name')['email'];
        $vendor=tbl_vendor::where('email','=',$vemail)->first();
        return view('view_profile',compact('vendor'));
    }
}
