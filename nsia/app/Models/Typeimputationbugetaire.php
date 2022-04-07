<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeimputationbugetaire extends Model
{
    use HasFactory;
    public function imputationbudgetaires()
    {
        return $this->hasMany('app\Models\Imputationbudgetaire');
    }
}
