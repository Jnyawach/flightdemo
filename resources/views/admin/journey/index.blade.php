@extends('layouts.admin')
@section('title','Planned Trips')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<section class="p-5">
    @include('includes.status')

    <div class="card">
        <div class="card-header">
            <h5 style="font-size: 18px" class="w-100 ">Available trips
                <a href="{{route('journey.create')}}" class="float-end">Add trip</a> </h5>
        </div>
        <div class="card-body">
            <table id="role" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DEPARTING</th>
                        <th>DESTINED</th>
                        <th>AIRLINE</th>
                        <th>LEAVING</th>
                        <th>ARRIVAL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($journeys as $journey)
                    <tr class="fs-6">
                        <td>{{$journey->id}}</td>
                        <td>{{$journey->from->name}}-{{$journey->from->location}}</td>
                        <td>{{$journey->to->name}}-{{$journey->to->location}}</td>
                        <td>{{$journey->airline->name}}</td>
                        <td> {{$journey->realTime($journey->departure)}}</td>

                        <td>{{$journey->realTime($journey->arrival)}}</td>
                        <td>
                            <div class="dropdown">
                                <h5 id="roleButton" class="dropdown-toggle fw-bold fs-6"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false" style="cursor: pointer">Action</h5>
                                <ul class="dropdown-menu" aria-labelledby="roleButton">
                                    <li><a class="dropdown-item" href="{{route('journey.show',$journey->id)}}">View</a> </li>

                                    <li><a class="dropdown-item" href="{{route('journey.edit',  $journey->id) }}">Edit</a>
                                    </li>
                                    <li>
                                        <form action="{{route('journey.destroy',$journey->id)}}"
                                              method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">
                                                delete
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </td>


                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <tr>
                            <th>ID</th>
                            <th>DEPARTURE</th>
                            <th>DESTINATION</th>
                            <th>AIRLINE</th>
                            <th>LEAVING</th>
                            <th>ARRIVAL</th>
                            <th>ACTION</th>
                        </tr>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#role').DataTable();
        });
    </script>
@endsection
