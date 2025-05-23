<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'description',
        'industry',
        'founded',
        'size',
        'website',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
