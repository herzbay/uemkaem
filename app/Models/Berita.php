<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul', 'isi', 'penulis', 'gambar'];

    public function komentars()
{
    return $this->hasMany(Komentar::class);
}
}
