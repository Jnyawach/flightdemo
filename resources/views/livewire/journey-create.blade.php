<div class="mt-5">

        <div class="form-group row">
            <div class="col-md-4">
                <label for="departure" class="control-label">Departure Airport:</label>
                    <select class="form-select mt-2" required name="departure"
                    wire:model.lazy="departure" id="departure">
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
                    <select class="form-select mt-2" required name="destination"
                    wire:model.lazy="destination" id="destination">
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
                    <select class="form-select mt-2" required name="airline"
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
                <label for="level" class="control-label">Coach:</label>
                    <select class="form-select mt-2" required name="level"
                    wire:model.lazy="level" id="level">
                        <option selected  value="">Select Couch</option>
                        @foreach($levels  as $level)
                            <option value="{{$level->id}}">{{$level->name}}</option>


                        @endforeach

                    </select>
                    <small>If the trip has more than one class. Create a new trip for all the classes</small>

                    @error('level') <span class="error">{{ $message }}</span> @enderror<br>
            </div>

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
                <label for="airline" class="control-label">Airline:</label>
                    <select class="form-select mt-2" required name="airline"
                    wire:model.lazy="airline" id="airline">
                        <option selected  value="">Select Airline</option>
                        @foreach($airlines  as $airline)
                            <option value="{{$airline->id}}">{{$airline->name}}</option>


                        @endforeach

                    </select>

                    @error('airline') <span class="error">{{ $message }}</span> @enderror<br>
            </div>

        </div>



</div>
