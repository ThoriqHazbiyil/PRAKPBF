<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'weight',
        'price',
        'image',
        'description',
        'category',
        'color',
        'status',
        'age'
    ];

    // Tentukan tipe data untuk kolom
    protected $casts = [
        'status' => 'boolean',
        'stock' => 'integer',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
