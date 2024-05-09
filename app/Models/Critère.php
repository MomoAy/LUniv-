<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critère extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function notation()
    {
        return $this->belongsTo(Notation::class);
    }
}
