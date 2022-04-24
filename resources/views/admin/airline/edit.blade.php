@extends('layouts.admin')
@section('title','Edit Airline')
@section('content')
    <section class="p-5">
        <img src="{{asset($airline->getFirstMediaUrl('logo')
             ?$airline->getFirstMediaUrl('logo'):'images/airline-icon.jpg')}}"
             alt="{{$airline->name}}" style="height: 100px">
        <h6>Current Logo</h6>
        <form method="POST" action="{{route('airline.update',$airline->id)}}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="form-group row">
                <div class="col-10 col-md-5">
                    <label for="logo" class="form-label">Airline Logo(optional)</label>
                    <input class="form-control" type="file" id="logo" name="logo">
                    @error('logo') <span class="error">{{ $message }}</span> @enderror
                    <small>Recommended size of 300px by 300px</small>
                </div>
            </div>
            <div class="form-group row mt-3">
                <div class="col-md-6">
                    <label class="control-label" for="name">
                        Airline Name:
                    </label>
                    <input type="text" class="form-control complete" name="name"
                           required value="{{$airline->name}}">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>

            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </section>
@endsection
