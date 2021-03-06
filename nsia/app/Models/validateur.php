<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class validateur extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}
