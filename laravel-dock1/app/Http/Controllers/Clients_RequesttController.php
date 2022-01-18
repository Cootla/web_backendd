<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Clients;
Use App\Models\Clients_Requestt;
Use App\Models\Clients_Agentt;

class Clients_RequesttController extends Controller
{
   
    public function index()
    {
        return Clients_Requestt::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'clientId'=>'required',
            'message'=>'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user = Clients_Requestt::create(($validator->validated()));
        return response()->json([ 'message' =>'your request is sent', 'user'=>$user->clients->username],201);
    }

    public function show($id)
    {
        return Clients_Requestt::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = Clients_Requestt::find($id)->update($request->all()); 
        return $users;
    }

    public function destroy($id)
    {
        //
    }
    public function getClientRequest($id){
        $posts = Clients::find($id)->clients_requestt;
        $arr = array();
        foreach ($posts as $post){
            array_push($arr,$post->message);
        }
        return $arr;

    }
    
    public function calLikes($post){
        //
    }
    public function getTimelinePost($id){
        $friends = Clients::find($id)->clients_agentt;
        $arr = array();
        foreach ($friends as $friend){
            array_push($arr,$friend->targetId);
        }
        $posts = array();
        foreach ($arr as $user){
            array_push($posts,$this->getUserPost($user));
        }
        return $posts;
          
    }
    public function showall(){
       $post = DB::table('clients__requests')->join('clients', 'clients__requestts.clientId', '=', 'clients.id')->select('clients__requestts.*','clients.username')->get();
       return $post;
    }
    
}
