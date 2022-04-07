<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imputationbudgetaire extends Model
{
    use HasFactory;
    public function demande()
    {
        return $this->belongsTo('app\Models\Demande');
    }
    public function Typeimputationbudgetaire()
    {
        return $this->belongsTo('app\Models\Typeimputationbudgetaire');
    }
}
