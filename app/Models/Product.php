<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'description', 'harga', 'kategori', 'image_url',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
