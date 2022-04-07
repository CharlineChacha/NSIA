<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='fournisseurs';
    protected $fillable= ['id', 'nomFournisseur', 'adresseFournisseur'];

     private function fournisseur()
     {
         return $this->belongsTo('app\Models\Fournisseur');
     }
    public function contacts()
    {
        return $this->hasMany('app\Models\Contact');
    }
}
