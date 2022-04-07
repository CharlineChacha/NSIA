<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelle extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function consommable()
    {
        return $this->belongsTo(Consommable::class);
    }

}
