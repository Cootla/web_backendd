<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use App\Models\Clients;
Use App\Models\Clients_Requestt;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    
    public function index()
    {
        return Clients::all();
    }

    //create clients
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(),[
           'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:clients',
            'email' => 'required|email|unique:clients',
            'password' => 'required|string|confirmed|min:4'
       ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user = Clients::create(($validator->validated()));
        
        return response()->json([ 'message' =>'Client successsfully registered', 'user'=>$user],201);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
             'email' => 'required|email',
             'password' => 'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),422);
        }   
        
        $credentials = $request->only('email','password');
        $email = DB::table('clients')->where(['email' => $credentials['email']])->value('email');
        if($email != null){
            $pass2 = $credentials['password'];
            $password = DB::table('clients')->where(['email' => $credentials['email']])->value('password');
            $id = DB::table('clients')->where(['email' => $credentials['email']])->value('id');
            if (Hash::check($pass2, $password,[])){
                //$user = Clients::find($id)->update('active'=>);
                return response()->json(['message'=>'Login Succesfull'], 201);
            }else{
                return response()->json(['message'=>'Invalid password']);
            }
          
        }return response()->json(['message'=>'Invalid email']);
        
    }
    
    public function show($id)
    {
        return  Clients::find($id);
    }

    public function update(Request $request, $id)
    {
        $user =     Clients::find($id)->update($request->all()); 
        return $users;
    }

    public function destroy($id)
    {
        //
        return Clients::destroy($id);
    }

    public function logout($id){

    }
    
   public function showall(){
       $user = DB::table('clients')->select('username')->get();
       return $user;
   }

}