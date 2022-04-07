<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
    public function consommable()
    {
        return $this->belongsTo(Consommable::class);
    }
    // public function imputationbudgetaires()
    // {
    //     return $this->hasMany('app\Models\Imputationbudgetaire');
    // }
    public function categorie()
    {
        return $this->belongsTo('app\Models\Categorie');
    }

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }


}
