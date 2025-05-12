<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['url', 'university_id'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
