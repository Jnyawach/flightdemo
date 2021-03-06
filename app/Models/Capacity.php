<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    use HasFactory;

    protected $fillable=['journey_id','price','capacity','level_id'];

    public function journey(){
        return $this->belongsTo(Journey::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }
}
