<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
    'name',
    'description',
    'price',
    'start_date',
    'is_active',
    'category_id',
];

// Relationship
public function category()
{
    return $this->belongsTo(Category::class);
}

}
