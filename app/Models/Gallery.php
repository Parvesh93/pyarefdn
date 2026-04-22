<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'image_section',
        'description',
        'button_link',
        'attach',
        'status',
    ];

    public function imageSection()
    {
        return $this->belongsTo(ImageSection::class,'image_section');
    }
}
