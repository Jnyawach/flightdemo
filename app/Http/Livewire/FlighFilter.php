<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Journey;
use App\Models\Level;
use App\Models\Stop;
use Illuminate\Database\Eloquent\Builder;

use Livewire\Component;

class FlighFilter extends Component
{   use WithPagination;

    public $trip=1;
    public $traveler=1;
    public $level;
    public $airline;
    public $departure;
    public $destination;
    public $arrival;
    public $start;
    public $stop;
    public $cancel;
    public $charge;
    public $sort= 'asc';
    public $foo;
    public $flight=NULL;

    protected $queryString = [
        'foo',

        'level' => ['except' => ''],
        'arrival' => ['except' => ''],
        'departure' => ['except' => ''],
        'destination' => ['except' => ''],
        'charge' => ['except' => ''],
        'airline' => ['except' => ''],
        'page' => ['except' => 1],
        'start'=>['except'=>''],
        'sort'=>['except'=>''],
    ];



    public function render()
    {
        $airlines=Airline::orderBy('name')->get();
        $airports=Airport::orderBy('name')->get();
        $levels=Level::all();
        $stops=Stop::all();
        $journeys=Journey::when($this->level,function ($query){
            return $query->where('level_id',$this->level);
         })
         ->when($this->departure,function ($query){
            return $query->where('from_id',$this->departure);
         })
         ->when($this->sort,function ($query){
            return $query->orderBy('price', $this->sort);
         })
         ->when($this->destination,function ($query){
            return $query->where('to_id',$this->destination);
         })
         ->when($this->start,function ($query){
            return $query->where('departure','>=',$this->start);
         })

         ->when($this->cancel,function ($query){
            return $query->where('cancellation_fee',NULL);
         })
         ->when($this->charge,function ($query){
            return $query->where('baggage_fee',NULL);
         })
        ->when($this->airline,function ($query){
            return $query->where('airline_id',$this->airline);
         })
         ->when($this->stop,function ($query){
            return $query->where('stop_id',$this->stop);
         })

       ->paginate(5);;

        return view('livewire.fligh-filter'
        ,[
            'airlines'=>$airlines,
            'airports'=>$airports,
            'levels'=>$levels,
            'stops'=>$stops,
            'journeys'=>$journeys,


        ]);
    }

    public function showFlight($id){
        $this->flight=Journey::findOrFail($id);

    }
    public function updatingAirline(){
        $this->resetPage();

    }
    public function updatingCharge(){
        $this->resetPage();




    }
    public function updatingCancel(){
        $this->resetPage();


    }
    public function updatingStop(){
        $this->resetPage();

    }
    public function updatingLevel(){
        $this->resetPage();

    }

    public function paginationView()

    {

        return 'vendor.livewire.live';
    }
}
