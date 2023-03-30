<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['photo_url', 'video_url'];


    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    function getVideoUrlAttribute()
    {
        return $this->getFirstMediaUrl('video');
    }
}
