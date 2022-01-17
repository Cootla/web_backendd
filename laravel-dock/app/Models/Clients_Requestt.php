<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;

class Clients_Requestt extends Model
{
    use HasFactory;
    protected $table = 'clients__requestts';
    
    protected $fillable = [
        'clientId',
        'message',    
    ];

    public function clients(){
        return $this->belongsTo('App\Models\Clients','clientId', 'id');
    }
}
