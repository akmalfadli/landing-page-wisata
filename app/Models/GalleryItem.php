<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'icon',
        'description',
        'image_url',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    // Get the full URL for the uploaded image
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return Storage::url($this->image);
        }

        // Fallback to image_url field if no uploaded image
        return $this->attributes['image_url'] ?? null;
    }

    // Get display image (prioritize uploaded image over icon)
    public function getDisplayImageAttribute()
    {
        return $this->image_url ?? $this->icon;
    }
}
