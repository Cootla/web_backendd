<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients_Agentt extends Model
{
    use HasFactory;
    protected $table = 'clients__agentts';

    protected $fillable = [
        'username',
        'product',
        'product_image'
    ];

    public function clients(){
        return $this->belongsTo(Clients::class, 'sourceId', 'id');
    }
}
