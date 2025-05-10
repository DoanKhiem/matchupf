<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'type',
        'salary',
        'experience',
        'status',
        'logo',
        // 'company_id',
        'description',
        'responsibilities',
        'skills',
        'benefits',
        'category_id',
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'skills' => 'array',
        'benefits' => 'array',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
