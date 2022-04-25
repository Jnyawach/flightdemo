@extends('layouts.admin')
@section('title', $journey->airline->name)
@section('content')
<section class="p-5">
    <h6>Flight trip</h6>
    <h5 class="fs-6 mt-5">From: <span>{{$journey->from->name}},{{$journey->from->location}}</span></h5>
    <h5 class="fs-6">Destination: <span>{{$journey->to->name}},{{$journey->to->location}}</span></h5>
    <h5 class="fs-6">Airline: <span>{{$journey->airline->name}}</span></h5>
    <h5 class="fs-6">Stopage: <span>{{$journey->stop->name}}</span></h5>
    <h5 class="fs-6">Flight Model: <span>{{$journey->plane->name}}</span></h5>
    <h5 class="fs-6">Departure: <span>{{$journey->realTime($journey->departure)}}</span></h5>
    <h5 class="fs-6">Arrival: <span>{{$journey->realTime($journey->arrival)}}</span></h5>
    <h5 class="fs-6">Flightime: <span>{{\Carbon\Carbon::parse($journey->departure)->diffInHours(\Carbon\Carbon::parse($journey->arrival))}}Hours</span></h5>
    <h5 class="fs-6">Laggage Fee: <span>{{$journey->baggage_fee}}</span></h5>
    <h5 class="fs-6">Cancellation Fee: <span>{{$journey->cancellation_fee}}</span></h5>

    <h5 class="mt-5">Available Capacity</h5>
    <table class="table table-bordered" style="width: 40%">
        <thead>
            <tr>

            <th>
                Coach Name
            </th>
            <th>Available</th>
            <th>Price</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($journey->capacities as $capacity)
            <tr>
            <td><h6 class="fs-6">{{$capacity->level->name}}:</h6></td>
            <td><h5 class="fs-6"><span>{{$capacity->capacity}}</span></h5></td>
           <td> <h5 class="fs-6"><span>$.{{$capacity->price}}</span></h5></td>
            </tr>
    @endforeach
        </tbody>
    </table>

    <div class="bags">
        <h6>Attached Offers</h6>
        <ul>
        @foreach ($journey->bags as $bag )
            <li>{{$bag->name}}</li>
        @endforeach
        </ul>
    </div>

    <div class="action">
        <form action="{{route('journey.destroy',$journey->id)}}"
            method="POST" class="d-inline-block">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-primary ">
              Delete
          </button>
      </form>
      <a class="btn btn-view d-inline-block" href="{{route('journey.edit',  $journey->id) }}">Edit</a>
    </div>




</section>
@endsection
