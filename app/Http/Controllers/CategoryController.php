<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate=tbl_category::get();
        return view('view_category',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryname'=>'required',
            'image'=>'required'
        ]);
        $image=$request->file('image');
        $imagetemp=$image->getClientOriginalName();
        $image->move('images',$imagetemp);
        $cate=new tbl_category([
            'cname'=>$request->get('categoryname'),
            'image'=>$imagetemp,
            'status'=>'active'
        ]);
        $cate->save();
        return redirect('/category');
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
        $cate=tbl_category::find($id);
        return view('edit_category',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'categoryname'=>'required',
           
        ]);
        $cname=$request->get('categoryname');
        $img=$request->file('image');
        $status=$request->get('status');
        if($img=="")
        {
            $cate=tbl_category::find($id);
            $cate->cname=$cname;
            $cate->status=$status;
            $cate->update();
            return redirect('/category');
        }
        else
        {
            $imagetemp=$img->getClientOriginalName();
            $img->move('images',$imagetemp);
            $cate=tbl_category::find($id);
            $cate->cname=$cname;
            $cate->image=$imagetemp;
            $cate->status=$status;
            $cate->update();
            return redirect('/category');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cate=tbl_category::find($id);
        $cate->delete();
        return redirect('/category');
    }
}
