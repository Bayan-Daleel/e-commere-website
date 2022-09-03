<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $with=['category'];
    protected $fillable=[
        'name',
        'slug',
        'description',
        'price',
        'category_id',
        'no-pieces',
        'photo'];

    public function category(){
        return  $this->belongsTo(Category::class);
    }

    public function scopeFilter($query,array $filters)
    {
        $query->when($filters['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', fn($query) => $query->where('name', $category)
            );
        });


    }
}
