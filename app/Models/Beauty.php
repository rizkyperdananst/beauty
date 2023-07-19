<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beauty extends Model
{
    use HasFactory;

    protected $fillable = ['category_beauty_id', 'gambar_beauty', 'kode_beauty', 'nama_beauty', 'stok_beauty', 'harga_beauty'];

    public function categoryBeauties()
    {
        return $this->belongsTo(CategoryBeauty::class, 'category_beauty_id');
    }
}
