<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
Use App\Models\Clients_Agentt;
Use App\Models\Clients;

class Clients_AgenttController extends Controller
{

    public function index()
    {
        return Clients_Agentt::all();
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required|string',
            'product'    => 'required|string',
           // 'product_image' => 'required|binary'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $friend = Clients_Agentt::create(($validator->validated()));
        return response()->json([ 'message' =>'success', 'Agent'=>$friend],201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function OnlineAgent($id){
        //
    }

    
    public function showall()
    {
        return Clients_Agentt::all();
    }
}
