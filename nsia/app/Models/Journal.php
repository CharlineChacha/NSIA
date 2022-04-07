<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function employe()
    {
        return $this->belongsTo(Journal::class);
    }
}
