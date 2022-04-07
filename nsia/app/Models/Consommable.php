<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consommable extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table= 'consommables';
    protected $fillable= ['idConsommable', 'nomConsommable','categorie_id', 'nombreCritique', 'nombreAlert'];

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
    public function modelles()
    {
        return $this->hasMany(Modelle::class);
    }
    public function stockconsommables()
    {
        return $this->hasMany(Stockconsommable::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
