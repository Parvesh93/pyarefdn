<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageSection extends Model
{
    
  
    public function galleries()
    {
        return $this->hasMany(Gallery::class,'image_section');
    }
    
}
