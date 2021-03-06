<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use App\Models\Airport;
use App\Models\Journey;
use App\Models\Level;
use App\Models\Plane;
use App\Models\Stop;
use Livewire\Component;

class JourneyCreate extends Component
{
    public $success=false;
    public $bags=[];
    public $coach=[];
    public $destination, $departure, $airline,$departure_date,$cancellation,$baggage,$arrival_date,
    $stop,$plane, $price, $capacity, $level;

    protected $rules=[
        'departure' => 'required|integer|max:255',
        'destination' => 'required|integer|max:255',
        'airline' => 'required|integer|max:255',
        'level' => 'required|integer|max:255',
        'capacity' => 'required|integer|max:255',
        'plane' => 'required|integer|max:255',
        'stop' => 'required|integer|max:10',
        'baggage'=>'nullable|numeric|between:0,99999.99',
        'price'=>'nullable|numeric|between:0,99999.99',
        'cancellation'=>'nullable|numeric|between:0,99999.99',
        'departure_date'=>'required',
        'arrival_date'=>'required|after:departure_date',
        'bags'=>'nullable|array',




    ];

    protected $messages=[
        'arrival_date.after'=>'The arrival date must be ahead of departure date',
        'departure.required'=>'Please add Place of departure',
        'destination.required'=>'Please add destination',
        'coach.min'=>'You must add at least one coach',
        'coach.required'=>'You must add at least one coach',
        'coach.*.level_id.required'=>'You must add at least one coach',
        'coach.*.level_id.integer'=>'You must select coach name',
        'coach.*.capacity.required_with' =>'Please add coach capacity',
        'coach.*.capacity.integer' =>'Coach capacity must a whole number. Not with decimals',
        'coach.*.price.required_with' =>'Please add coach Price',
        'coach.*.price.numeric' =>'Coach price must be a valid price. Do not add currency',
        'cancellation.numeric'=>'Cancellation price must be a valid price. Do not add currency',
        'baggage.numeric'=>'Baggage price must be a valid price. Do not add currency',



    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createTrip(){

        $validatedData = $this->validate();

        $trip=Journey::create([
            'from_id'=>$this->departure,
            'to_id'=>$this->destination,
            'airline_id'=>$this->airline,
            'stop_id'=>$this->stop,
            'baggage_fee'=>$this->baggage,
            'cancellation_fee'=>$this->cancellation,
            'departure'=>$this->departure_date,
            'arrival'=>$this->arrival_date,
            'plane_id'=>$this->plane,
            'level_id'=>$this->level,
            'price'=>$this->price,
            'capacity'=>$this->capacity,

        ]);

        if($this->bags){
            foreach($this->bags as $bag){
                $trip->bags()->create([
                    'name'=>$bag
                ]);
            }

        }

    

        $this->reset();

        redirect('admin/journey')
        ->with('status','Trip Created Successfully');




    }





    public function render()
    {

        $airlines=Airline::orderBy('name')->get();
        $airports=Airport::orderBy('name')->get();
        $levels=Level::all();
        $stops=Stop::all();
        $planes=Plane::orderBy('name')->get();
        return view('livewire.journey-create',[
            'airlines'=>$airlines,
            'airports'=>$airports,
            'levels'=>$levels,
            'stops'=>$stops,
            'planes'=>$planes,
        ]);
    }
}
