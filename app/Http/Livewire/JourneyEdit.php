<?php

namespace App\Http\Livewire;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Plane;
use App\Models\Journey;
use Carbon\Carbon;
use App\Models\Level;
use App\Models\Stop;
use Livewire\Component;

class JourneyEdit extends Component
{
    public $journey;
    public $success=false;
    public $bags=[];
    public $coach=[];
    public $destination, $departure, $airline,$departure_date,$cancellation,$baggage,$arrival_date,
    $stop,$plane,$price,$capacity,$level;

    public function mount(){
        $this->destination=$this->journey->from_id;
        $this->departure=$this->journey->to_id;
        $this->airline=$this->journey->airline_id;
        $this->stop=$this->journey->stop_id;
        $this->baggage=$this->journey->baggage_fee;
        $this->cancellation=$this->journey->cancellation_fee;
        $this->departure_date=$this->journey->departure;
        $this->arrival_date=$this->journey->arrival;
        $this->bags=$this->journey->bags;
        $this->plane=$this->journey->plane_id;
        $this->price=$this->journey->price;
        $this->capacity=$this->journey->capacity;
        $this->level=$this->journey->level_id;

    }
    protected $rules=[
        'departure' => 'required|integer|max:255',
        'destination' => 'required|integer|max:255',
        'airline' => 'required|integer|max:255',
        'plane' => 'required|integer|max:255',
        'stop' => 'required|integer|max:10',
        'baggage'=>'nullable|numeric|between:0,99999.99',
        'cancellation'=>'nullable|numeric|between:0,99999.99',
        'departure_date'=>'required',
        'arrival_date'=>'required|after:departure_date',
        'bags'=>'nullable|array',
        'coach'=>'required|array|min:1',
        'coach.*.level_id' => 'required|max:10|integer',
        'coach.*.capacity' => 'required_with:coach.*.level_id|integer',
        'coach.*.price' => 'required_with:coach.*.level_id|numeric|between:0,99999.99',



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
    public function render()
    {
        $airlines=Airline::orderBy('name')->get();
        $airports=Airport::orderBy('name')->get();
        $levels=Level::all();
        $stops=Stop::all();
        $planes=Plane::orderBy('name')->get();
        return view('livewire.journey-edit',
            [
                'airlines'=>$airlines,
                'airports'=>$airports,
                'levels'=>$levels,
                'stops'=>$stops,
                'planes'=>$planes,
            ]
        );
    }

    public function updateTrip(){
        $journey=Journey::findOrFail($this->journey->id);
        $journey->update([
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

        $journey->bags()->delete();

        if($this->bags){
            foreach($this->bags as $bag){
                $journey->bags()->create([
                    'name'=>$bag
                ]);
            }

        }

        $this->reset();

        redirect('admin/journey')
        ->with('status','Trip Updated Successfully');
    }
}
