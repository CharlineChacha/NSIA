<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='categories';
    protected $fillable= ['idCategorie', 'nomCategorie'];

    public function consommables()
    {
        return $this->hasMany(Consommable::class);

    }
}
