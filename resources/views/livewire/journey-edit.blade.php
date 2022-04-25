<div class="mt-5">
    <form wire:submit.prevent="updateTrip">

        <div class="form-group row">
            <div class="col-md-4">
                <label for="departure" class="control-label">Departure Airport:</label>
                    <select class="form-select mt-2"  name="departure"
                    wire:model.lazy="departure" id="departure" required>
                        <option selected  value="">Select Departure</option>
                        @foreach($airports  as $airport)
                            <option value="{{$airport->id}}"
                                @if($airport->id==$destination)disabled @endif
                                >{{$airport->name}} ({{$airport->abbreviation}})</option>
                        @endforeach

                    </select>

                    @error('departure') <span class="error">{{ $message }}</span> @enderror<br>
            </div>

            <div class="col-md-4">
                <label for="destination" class="control-label">Destination Airport:</label>
                    <select class="form-select mt-2"  name="destination"
                    wire:model.lazy="destination" id="destination" required>
                        <option selected  value="">Select Destination</option>
                        @foreach($airports  as $airport)
                            <option value="{{$airport->id}}"
                                @if($airport->id==$departure)disabled @endif
                                >{{$airport->name}} ({{$airport->abbreviation}})</option>
                        @endforeach

                    </select>

                    @error('destination') <span class="error">{{ $message }}</span> @enderror<br>
            </div>
            <div class="col-md-4">
                <label for="airline" class="control-label">Airline:</label>
                    <select class="form-select mt-2"  name="airline"
                    wire:model.lazy="airline" id="airline">
                        <option selected  value="">Select Airline</option>
                        @foreach($airlines  as $airline)
                            <option value="{{$airline->id}}">{{$airline->name}}</option>


                        @endforeach

                    </select>

                    @error('airline') <span class="error">{{ $message }}</span> @enderror<br>
            </div>

        </div>

        <div class="form-group row">


            <div class="col-md-4">
                <label for="stop" class="control-label">Stops:</label>
                    <select class="form-select mt-2" required name="stop"
                    wire:model.lazy="stop" id="stop">
                        <option selected  value="">Select Stops</option>
                        @foreach($stops  as $stop)
                            <option value="{{$stop->id}}">{{$stop->name}}</option>


                        @endforeach

                    </select>

                    @error('stop') <span class="error">{{ $message }}</span> @enderror<br>
            </div>
            <div class="col-md-4">
                <label for="baggage" class="control-label">Baggage Fee:</label>
                <input type="text" name="baggage" wire:model.lazy="baggage" id="baggage"
                       class="form-control mt-2" value="0.00">
                <small>Add baggage fee it there is. Else leave this at empty</small><br>
                @error('baggage') <span class="error">{{ $message }}</span> @enderror<br>
            </div>


            <div class="col-md-4">
                <label for="cancellation" class="control-label">Cancellation Fee:</label>
                <input type="text" name="cancellation" wire:model.lazy="cancellation" id="cancellation"
                       class="form-control mt-2" value="0.00">
                <small>Add cancellation fee it there is. Else leave this at empty</small><br>
                @error('cancellation') <span class="error">{{ $message }}</span> @enderror<br>
            </div>

        </div>

        <div class="form-group mt-2 row">
            <div class="col-8 col-sm-4 col-lg-3">
                <label for="departure_date" class="control-label">Departure Date & Time:</label>
                <input type="datetime-local" name="departure_date" wire:model.lazy="departure_date" id="departure_date" required
                       class="form-control mt-2">
                <small>Enter  date of departure an time</small>
                @error('departure_date') <span class="error">{{ $message }}</span> @enderror<br>
            </div>
            <div class="col-8 col-sm-4 col-lg-3">
                <label for="arrival_date" class="control-label">Arrival Date & Time:</label>
                <input type="datetime-local" name="arrival_date" wire:model.lazy="arrival_date" id="arrival_date" required
                       class="form-control mt-2" >
                <small>Enter  date of arrival and time{{$arrival_date}}</small><br>
                @error('arrival_date') <span class="error">{{ $message }}</span> @enderror<br>
            </div>
            <div class="col-md-4">
                <label for="departure" class="control-label">Aircraft model:</label>
                    <select class="form-select mt-2"  name="plane"
                    wire:model.lazy="plane" id="plane" required>
                        <option selected  value="">Select model</option>
                        @foreach($planes  as $plane)
                            <option value="{{$plane->id}}">{{$plane->name}}</option>


                        @endforeach

                    </select>

                    @error('plane') <span class="error">{{ $message }}</span> @enderror<br>
            </div>
        </div>
        <h6 class="mt-5">Please do not check if excluded</h6>
        <div class="form-group mt-3 row">
            <div class="col-8 col-sm-4 col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="bags"
                    value="Carry-on bag included" wire:model.lazy="bags">
                    <label class="form-check-label" for="bags" >
                        Carry-on bag included
                    </label>
                  </div>
            </div>
            <div class="col-8 col-sm-4 col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="bags_2"
                    value="First checked bag included" wire:model.lazy="bags">
                    <label class="form-check-label" for="bags_2" >
                        First checked bag included
                    </label>
                  </div>
            </div>

        </div>
        @error('bags') <span class="error">{{ $message }}</span> @enderror<br>

        <div class="form-group row">


            <div class="col-md-4">
                <label for="level" class="control-label">Coach:</label>
                    <select class="form-select mt-2" required name="level"
                    wire:model.lazy="level" id="level">
                        <option selected  value="">Select coach</option>
                        @foreach($levels  as $level)
                            <option value="{{$level->id}}">{{$level->name}}</option>


                        @endforeach

                    </select>

                    @error('level') <span class="error">{{ $message }}</span> @enderror<br>
            </div>
            <div class="col-md-4">
                <label for="capacity" class="control-label">Capacity Available:</label>
                <input type="text" name="capacity" wire:model.lazy="capacity" id="capacity"
                       class="form-control mt-2">
                <small>Add capacity available</small><br>
                @error('capacity') <span class="error">{{ $message }}</span> @enderror<br>
            </div>


            <div class="col-md-4">
                <label for="price" class="control-label">Fare/Price:</label>
                <input type="text" name="price" wire:model.lazy="price" id="price"
                       class="form-control mt-2">
                <small>Add the set price</small><br>
                @error('price') <span class="error">{{ $message }}</span> @enderror<br>
            </div>

        </div>
        <button type="submit" class="btn btn-primary mt-3">Create Trip</button>

    </form>

</div>

