<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'slug',
        'image',
        'desc',
        'excerpt',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
