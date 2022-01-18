<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients_Agentt;
use App\Models\Clients_Request;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        //'password_confirmation',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    
    public function user_post(){
        return $this->hasMany(Clients_Request::class, 'clientId', 'id');
    }

   /* public function client_product(){
        return $this->hasMany(Clients_Agentt::class, 'sourceId', 'id');
    }*/

    public function client_agent(){
        return $this->hasMany(Clients_Agentt::class, 'username', 'id');
    }

}
