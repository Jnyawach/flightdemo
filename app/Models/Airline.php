<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Airline extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable=['name'];
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('logo-icon')
            ->width(40)
            ->height(40);

    }

    public function journeys(){
        return $this->hasMany(Journey::class);
    }
}
