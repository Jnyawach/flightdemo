<div>

    <section class="pt-5 p-3">
        <div class="card p-3 search">
            <div class="card-body">

                <form>
                    <div class="form-group">
                        <div class="d-inline-block">

                            <select class="form-select minimal" wire:model="trip">

                                <option value="1" selected>Round Trip </option>
                                <option value="2">One way </option>
                             </select>
                          </div>
                          <div class="d-inline-block">
                             <select class="form-select minimal" wire:model="traveler">

                                 <option value="1" selected>1-Traveler(s)</option>
                                 <option value="2">2-Traveler(s)</option>
                                 <option value="3">3-Traveler(s)</option>
                                 <option value="4">4-Traveler(s)</option>
                                 <option value="5">5-Traveler(s)</option>

                             </select>
                           </div>
                           <div class="d-inline-block">
                             <select class="form-select minimal" wire:model="level">
                                 @foreach ($levels as $level)
                                 <option value="{{$level->id}}">{{$level->name}}</option>
                                 @endforeach

                             </select>
                           </div>
                           <div class="d-inline-block">
                            <select class="form-select minimal" wire:model="airline">
                                <option selected>Any Airline</option>
                                @foreach ($airlines as $airline)
                                <option value="{{$airline->id}}">{{$airline->name}}</option>
                                @endforeach



                            </select>
                          </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                            <label for="From"><i class="fa-solid fa-location-crosshairs"></i> Flying From:</label>
                           <select class="form-select mt-2" name="departure" wire:model.lazy="departure" id="departure" required>
                                <option selected value="">Select Departure</option>
                                @foreach($airports as $airport)
                                <option value="{{$airport->id}}" @if($airport->id==$destination)disabled @endif
                                    >{{$airport->name}} ({{$airport->abbreviation}})</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 p-2">

                                <label for="Destination"><i class="fa-solid fa-location-crosshairs"></i> Flying to:</label>
                                <select class="form-select mt-2" name="destination" wire:model.lazy="destination" id="destination" required>
                                    <option selected value="">Select Destination</option>
                                    @foreach($airports as $airport)
                                    <option value="{{$airport->id}}" @if($airport->id==$departure)disabled @endif
                                        >{{$airport->name}} ({{$airport->abbreviation}})</option>
                                    @endforeach

                                </select>


                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
                            <label for="Departure"><i class="fa-solid fa-calendar-days"></i> Departure Date:</label>
                            <input type="date" class="form-control mt-2" id="Departure" wire:model="start">

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 p-2">
                            <label for="Return"><i class="fa-solid fa-calendar-days"></i> Return Date:</label>
                            <input type="date" class="form-control mt-2" id="Return"  wire:model="arrival">

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-2 align-self-end p-2">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </section>
    <section class="pt-5 p-3">
        <div class="row">
            <div class="col-md-3 d-md-none d-lg-block">

                <div class="stops">
                    <div class="">
                        <h6 class="">Filter By:</h6>
                        <hr>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th><h5 class="fs-6">Stops</h5></td>
                                    <th class="text-end"><h5 class="fs-6">From</h5></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stops as $stop)
                                <tr>
                                    <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="{{$stop->id}}" id="Nonstop{{$stop->id}}" name="stop"
                                        wire:model="stop">
                                        <label class="form-check-label" for="Nonstop{{$stop->id}}">
                                            {{$stop->name}} ({{$stop->journeys->count()}})
                                        </label>
                                    </div>
                                </td>
                                    <td class="text-end"><label>$ {{$stop->journeys->min('price')}}</label></td>
                                </tr>
                                @endforeach


                                <thead>
                                    <tr>
                                        <th><h5 class="fs-6">Airlines</h5></td>
                                        <th class="text-end"><h5 class="fs-6">From</h5></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($airlines as $airline)
                                    <tr>
                                        <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="{{$airline->id}}" id="Airline{{$airline->id}}" name="airline"
                                            wire:model="airline">
                                            <label class="form-check-label" for="Nonstop{{$stop->id}}">
                                                {{$airline->name}} ({{$airline->journeys->count()}})
                                            </label>
                                        </div>
                                    </td>
                                        <td class="text-end"><label>$ {{$airline->journeys->min('price')}}</label></td>
                                    </tr>
                                    @endforeach


                                </tbody>
                                <thead>
                                    <tr>
                                        <th><h5 class="fs-6">Travel & Baggage</h5></td>
                                        <th class="text-end"><h5 class="fs-6">From</h5></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"  id="CancelFee"
                                                wire:model="cancel" >
                                                <label class="form-check-label" for="CancelFee">
                                                  No Cancel Fee (3)
                                                </label>
                                              </div>
                                        </td>
                                        <td class="text-end"><label>$ {{$stop->journeys->min('price')}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ChargeFee"
                                                wire:model="charge" >
                                                <label class="form-check-label" for="ChargeFee">
                                                  No Charge Fee (5)
                                                </label>
                                              </div>
                                        </td>
                                        <td class="text-end"><label>$ {{$stop->journeys->min('price')}}</label></td>
                                    </tr>

                                </tbody>
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
            <div class="col-md-8 col-lg-6">
                <h5 class="fs-6">Choose flight department <i class="fa-solid fa-angle-right me-2 ms-2"></i>
                    Choose returning flight <i class="fa-solid fa-angle-right me-2 ms-2"></i>
                    Review your trip
                </h5>
                <hr>
                <div class="intro">
                <div class="row">
                    <div class="col-9">
                        <p class="">Prices Displayed include taxes and may change based on availability.
                            You can review any additional fees. Prices are not final unitl
                            you complete your purchase.
                        </p>
                    </div>
                    <div class="col-3">
                        <select class="form-select" wire:model="sort">

                            <option value="" selected> SORT BY </option>
                            <option value="asc">PRICE LOWEST</option>
                            <option value="desc">PRICE HIGHEST</option>


                        </select>
                    </div>
                </div>
            </div>
            @if ($journeys->count()>0)



                    @foreach ($journeys as $journey)
                    <div class="flight mt-4 p-3" wire:click="showFlight({{ $journey->id }})">
                    <div class="row">
                        <div class="col-5">
                            <h5 class="fs-6 fw-bold">{{\Carbon\Carbon::parse($journey->departure)->format('g:i A')}}-{{\Carbon\Carbon::parse($journey->arrival)->format('g:i A')}}</h5>
                            <p class="p-0 m-0">{{$journey->from->location}} ({{$journey->from->abbreviation}})-{{$journey->to->location}} ({{$journey->to->abbreviation}})</p>
                            <div class="mt-2">
                                <img src="{{asset($journey->airline->getFirstMediaUrl('logo')
                                        ?$journey->airline->getFirstMediaUrl('logo','logo-icon'):'company-icon.jpg')}}"
                                                 alt="{{$journey->airline->name}}" style="width: 30px" class="float-start me-2">
                                <p class="">{{$journey->airline->name}}</p>
                            </div>
                        </div>
                        <div class="col-3 align-self-center">
                            <p class="fs-6">
                                {{\Carbon\Carbon::parse($journey->departure)->diffInHours(\Carbon\Carbon::parse($journey->arrival))}}hrs<br> ({{$journey->stop->name}})</p>
                        </div>
                        <div class="col-4 align-self-center text-end">
                            <p class="p-0 m-0">{{$journey->capacity}} left</p>
                            <h3>$. {{$journey->price}}</h3>
                            <p class="p-0 m-0 fs-6">Roundtrip per Traveler</p>
                        </div>
                    </div>
                </div>
                    @endforeach
                    @else
                    <section class="text-center p-5">
                        <img src="{{asset('images/Sad-face.png')}}" class="img-fluid mt-5" style="width: 80px">
                        <h5 class="mt-3">Sorry! We could not find the flight you are looking for</h5>
                    </section>
                    @endif




            </div>
            @if ($flight)
            <div class="col-md-4 col-lg-3">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="text-end">
                            <button type="button" class="btn btn-link">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <p>{{\Carbon\Carbon::parse($flight->departure)->format('g:i A')}}-{{\Carbon\Carbon::parse($flight->arrival)->format('g:i A')}} ({{$flight->stop->name}})</p>
                        <div class="mt-2">
                            <img src="{{asset($flight->airline->getFirstMediaUrl('logo')
                                        ?$flight->airline->getFirstMediaUrl('logo','logo-icon'):'company-icon.jpg')}}"
                                                 alt="{{$flight->airline->name}}" style="width: 40px" class="float-start me-2">
                            <h5 class="fs-6 align-self-center">{{$flight->airline->name}}({{$flight->from->abbreviation}})</h5>
                        </div>
                        <div class="mt-4">
                        <button class="btn btn-link text-decoration-none fw-bold fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                 Show details <i class="fa-solid fa-angle-down ms-2"></i>
                        </button>
                        <div class="collapse small-details" id="collapseExample">
                           <h5 class="fs-6 fw-bold"> <i class="fa-solid fa-plane-departure"></i> {{\Carbon\Carbon::parse($flight->departure)->format('g:i A')}}-{{$flight->from->location}}</h6>
                            <small>{{$flight->from->name}}</small> <br>
                            <small>{{\Carbon\Carbon::parse($flight->departure)->diffInHours(\Carbon\Carbon::parse($flight->arrival))}}hrs flight</small> <br>
                            <small>{{$flight->airline->name}}</small><br>
                            <small>{{$flight->plane->name}}</small><br>
                            <small>{{$flight->level->name}}</small>
                            <h5 class="fs-6 fw-bold"> <i class="fa-solid fa-plane-arrival"></i> {{\Carbon\Carbon::parse($flight->arrival)->format('g:i A')}}-{{$flight->to->location}}</h6>
                                <small>{{$flight->to->name}}({{$flight->to->abbreviation}})</small>
                        </div>
                        <div class="card card-body mt-3">
                            <h2 class="fw-bold">$. {{$flight->price *$traveler/$trip}}</h2>
                            <p class="p-0 m-0">Roundtrip for {{$traveler}} traveler</p>
                            <p class="fs-6 fw-bold">Cabin: <span>{{$flight->level->name}}</span></p>
                            @if ($flight->bags()->count()>0)
                            <h6>Bags</h6>
                            <ul class="list-unstyled">
                                @foreach ($flight->bags as $bag)
                                <li><i class="fa-solid fa-check"></i> {{$bag->name}}</li>

                                @endforeach

                            </ul>
                            @endif


                            <button type="button" class="btn btn-primary">
                                Book
                            </button>

                        </div>

                        </div>

                    </div>
                </div>
            </div>
            @endif

        </div>
    </section>
    <section class="text-center p-5">
        <div class="row">
            <div class="col-12 mx-auto text-center">
                {{$journeys->links('vendor.livewire.live')}}
            </div>
        </div>

      </section>
</div>
