<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'gender',
        'race',
        'description'

    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
