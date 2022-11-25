<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'code',
        'name',
        'description',
        'image',
        'currency',
        'price',
        'status'
    ];

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('id','DESC');
            $builder->where('status',1);
        });

        static::creating(function ($product) {
            do {
                $code = Str::random(32);
            } while (Product::where('code', $code)->exists());
            $product->code = $code;
        });
    }

    public function getRouteKeyName()
    {
        return 'code';
    }

    
}
