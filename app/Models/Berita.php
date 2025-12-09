<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'gambar',
        'penulis',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * Generate slug from judul
     */
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Get excerpt from isi
     */
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->isi), 150);
    }
}
