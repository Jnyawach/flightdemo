<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    protected $fillable=['from_id','to_id','airline_id','stop_id',
    'baggage_fee','cancellation_fee','price','departure_date',
'arrival_date','departure_time','arrival_time'];

    public function capacities(){
        return $this->hasMany(Capacity::class);
    }
}
