<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use App\Models\Airport;
use App\Models\Level;
use App\Models\Stop;
use Livewire\Component;

class JourneyCreate extends Component
{
    public $success=false;
    public $currentStep=1;
    public $destination, $departure, $airline;

    public function render()
    {

        $airlines=Airline::orderBy('name')->get();
        $airports=Airport::orderBy('name')->get();
        $levels=Level::all();
        $stops=Stop::all();
        return view('livewire.journey-create',[
            'airlines'=>$airlines,
            'airports'=>$airports,
            'levels'=>$levels,
            'stops'=>$stops
        ]);
    }
}
