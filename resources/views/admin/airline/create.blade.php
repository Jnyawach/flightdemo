@extends('layouts.admin')
@section('title','Add airline')
@section('content')
    <section class="p-5">
        <form method="POST" action="{{route('airline.store')}}" enctype="multipart/form-data">
            @csrf
            @honeypot
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
                          required value="{{old('name')}}">
                   @error('name') <span class="error">{{ $message }}</span> @enderror
               </div>
                
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

    </section>
@endsection
