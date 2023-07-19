<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = ['gambar_penyakit', 'nama_penyakit', 'deskripsi_penyakit', 'beauty_id'];

    public function beauties()
    {
        return $this->belongsTo(Beauty::class, 'beauty_id');
    }
}
