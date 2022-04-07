<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class Employe extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function poste()
    {
        return $this-> BelongsTo(Poste::class);
    }
    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
    public function validateurs()
    {
        return $this->hasMany(validateur::class);
    }
  


}
