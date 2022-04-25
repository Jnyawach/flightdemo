<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $fillable=['name','journey_id'];
    public function journey(){
        return $this->belongsTo(Journey::class);

    }
}
