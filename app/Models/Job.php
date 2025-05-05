<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'type',
        'salary',
        'experience',
        // 'company_id',
        'description',
        'responsibilities',
        'skills',
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'skills' => 'array',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
