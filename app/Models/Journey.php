<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Journey extends Model
{
    use HasFactory;

    protected $fillable=['from_id','to_id','airline_id','stop_id',
    'baggage_fee','cancellation_fee','departure', 'arrival','plane_id',
    'level_id','price','capacity'
    ];

    public function capacities(){
        return $this->hasMany(Capacity::class);
    }

    public function bags(){
        return $this->hasMany(Bag::class);
    }

    public function airline(){
        return $this->belongsTo(Airline::class);
    }

    public function level(){
        return $this->belongsTo(Level::class);

    }

    public function stop(){
        return $this->belongsTo(Stop::class);
    }
    public function plane(){
        return $this->belongsTo(Plane::class);
    }

    public function to(){
        return $this->belongsTo(Airport::class,'to_id');
    }

    public function realTime($time){
        return Carbon::parse($time)->format('Y/m/d g:i:s A');

    }

    public function from(){
        return $this->belongsTo(Airport::class,'from_id');
    }

}
