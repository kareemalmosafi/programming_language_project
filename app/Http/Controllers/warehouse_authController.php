<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\warehouse_account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use Hash;
class warehouse_authController extends Controller
{
   public function register(Request $request)
   {
    $input=$request->all();
    $validator=validator::make( $input,[
       // 'name'=>'required|',
        'email'=>'required|email',
        'password'=>'required|min:8'
    ]);
    if($validator->fails())
    {
        return redirect()->back();
        
    }

    else{
         
//or warehouse_model
       $warehouse_account= warehouse_account::create([
        //'name'=>$request->name,
'email'=>$request->email,
'password'=>bcrypt( $request->password)
//'password'=>hash::make($request->password)
       ]);

       $token= $warehouse_account->CreateToken('verystrongtoken')->accessToken;
       return response()->json(['token'=>$token],201);
    }
   }


   public function login(Request $request)
   {
$data=[
   
    'email'=>$request->email,
   'password'=>$request->password,
];
//$auth = auth()->guard('warehouse_account');

 //$user=user::find($data);



if (auth()->attempt($data))
{
    $token=  auth()->user()->CreateToken('verystrongtoken')->accessToken;
    return response()->json(['token'=>$token],201);
}
else{
    return response()->json([
        'error'=>'unauthorized'],401);
}
   }




   public function logout()
   {
    Session::flush();
    Auth::logout();
    if(Auth::logout())
    {
    return response()->json([
        'error'=>'ssss'],201);
}
else
{
    return response()->json([
        'error'=>'dddd'],401);
}
   }
   }


