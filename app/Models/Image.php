<?php

// app/Models/Image.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['update_image_id', 'image_path'];

    // Establishing a relationship with Updates_Image model
    public function updatesImage()
    {
        return $this->belongsTo(Updates_Image::class, 'update_image_id');
    }

    // Method to update the image path
    public function updateImagePath($newPath)
    {
        $this->image_path = $newPath;
        $this->save();
    }

    // Add more methods for other operations as needed
}
