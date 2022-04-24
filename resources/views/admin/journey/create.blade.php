@extends('layouts.admin')
@section('title','Create Trip')
@section('styles')
@livewireStyles
@endsection
@section('content')
<section class="p-5">
    <h5>Create a Trip</h5>
    <h6>A bookable destination</h6>
    @livewire('journey-create')
</section>

@endsection
@section('scripts')
@livewireScripts
@endsection
