<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
    'acronyme',
    'name',
    'dateCreation',
    'description',
    'address',
    'country',
    'city',
    'webSite',
    'email',
    'contact',
    'contact2',
    'nbStudents',
    'percentageIntegration'
    ];

    public function images()
    {
        return $this->hasMany(Images::class);
    }

    public function notations()
    {
        return $this->hasMany(Notation::class);
    }


}
