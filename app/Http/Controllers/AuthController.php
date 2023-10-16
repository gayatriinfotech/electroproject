<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\tbl_category;
use App\Models\tbl_product;
use App\Models\tbl_subcategory;
use App\Models\tbl_vendor;
use DB;
use Session;
class AuthController extends Controller
{
    public function indexpagecall()
    {
        
        $cate=tbl_category::count();
        $product=tbl_product::count();
        $subc=tbl_subcategory::count();
        $vendor=tbl_vendor::count();
        return view('indexpage',compact('cate','product','subc','vendor'));
    }
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(), 
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ]);
            }

            $user = User::where('email', $request->email)->first();
           // return $user;
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                
            ], 200);
          

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function indexpage(Request $request)
    {
        $user=$request->get('username');
        $request->session()->put('username',$user);
        $arr=array();
        $data['status']="success";
        array_push($arr,$data);
        return response()->json($arr);
    }
    public function loginstore(Request $request)
    {
        $email=$request->get('username');
        $password=$request->get('pass');
        $user=DB::table('users')->where('email','=',$email)->where('password','=',$password)->count();
        
        if($user==1)
        {
            $getuser=DB::table('users')->where('email','=',$email)->where('password','=',$password)->first();
            
            $usertype=$getuser->usertype;
           
            $request->session()->put('username',$usertype);
            if($usertype=='vendor')
            {
                $vendor_id=DB::table('tbl_vendors')->where('email','=',$email)->first();
                $vendorid=$vendor_id->id;
                $name=$getuser->name;
                //$request->session()->put('vendor_name',$name);
                Session::put('vendor_name', ['name' => $name,'email'=>$getuser->email,'vendor_id'=>$vendorid]);
            }
            echo "<script>
            alert('Login Success');
            window.location.href='/indexpage';
           </script>";
        }
        else
        {
            echo "<script>
            alert('Please Check Login Details');
            window.location.href='/';
            </script>";
        }
    }
    public function logout(Request $request)
    {
        //$login=$request->session()->get('username');
        $request->session()->forget('username');
        return redirect('/');
    }
   
}   
