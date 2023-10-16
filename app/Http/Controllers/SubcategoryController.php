<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_subcategory;
use App\Models\tbl_category;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subc=tbl_subcategory::get();
        return view('view_sub_category',compact('subc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate=tbl_category::get();
        return view('add_sub_category',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subcategoryname'=>'required',
            
            'image'=>'required'
        ]);
        $sname=$request->get('subcategoryname');
       
        $img=$request->file('image');
        $imagetemp=$img->getClientOriginalName();
        $img->move('images',$imagetemp);
        $scate=new tbl_subcategory([
            'subcate_name'=>$sname,
           
            'subcate_image'=>$imagetemp,
            'subcate_status'=>'active'
        ]);
        $scate->save();
        return redirect('/sub-category');
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
        
        $subc=tbl_subcategory::find($id);
        return view('edit_sub_category',compact('subc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'subcategoryname'=>'required',
            
            
        ]);
        $sname=$request->get('subcategoryname');
       
        $status=$request->get('status');
        $img=$request->file('image');
       
        if($img=="")
        {
           
            $subc=tbl_subcategory::find($id);
            $subc->subcate_name=$sname;
           
            $subc->subcate_status=$status;
            $subc->update();
            return redirect('/sub-category');
        }
        else{
            $imagetemp=$img->getClientOriginalName();
            $img->move('images',$imagetemp);
            $subc=tbl_subcategory::find($id);
            $subc->subcate_name=$sname;
            
            $subc->subcate_image=$imagetemp;
            $subc->subcate_status=$status;
            $subc->update();
            return redirect('/sub-category');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $scate=tbl_subcategory::find($id);
        $scate->delete();
        return redirect('/sub-category');
    }
}
