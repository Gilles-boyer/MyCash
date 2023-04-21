<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sales_price',
        'category_id',
        'tva_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tva()
    {
        return $this->belongsTo(Tva::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function pos()
    {
        return $this->belongsToMany(Pos::class, 'pos_products');
    }
}
