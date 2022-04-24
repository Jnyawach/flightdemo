@extends('layouts.admin')
@section('title', 'Plane Models')
@section('styles')
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        @include('includes.status')
        <section class="p-3">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card shadow-sm">
                        <div class="card-header p-3">
                            <h5 style="font-size: 18px" class="float-start">Aeroplane Models</h5>
                            <!-- Button trigger modal -->
                            <button class="float-end btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createCategoryModal">Add Model
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="createCategoryModal" tabindex="-1"
                                aria-labelledby="#createCategoryModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="#createCategoryModalLabel">Add Model</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('planes.store') }}" method="POST" id="roleForm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group required">
                                                    <label class="control-label" for="name">
                                                        Name</label>
                                                    <input type="text" class="form-control complete" name="name" required
                                                        id="name">
                                                    @error('name')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror

                                                </div>

                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="roleForm" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="role" class="display">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>CREATED ON</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($planes as $plane)
                                        <tr>
                                            <td>{{$plane->id }}</td>
                                            <td>{{$plane->name }}</td>


                                            <td>{{$plane->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <h5 id="roleButton" class="dropdown-toggle fw-bold fs-6"
                                                        data-bs-toggle="dropdown" aria-expanded="false"
                                                        style="cursor: pointer">Action</h5>
                                                    <ul class="dropdown-menu" aria-labelledby="roleButton">

                                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#editModal{{ $plane->id }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('planes.destroy', $plane->id) }}" method="POST">

                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                    delete
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="editModal{{ $plane->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                    Model</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('planes.update', $plane->id) }}"
                                                                    method="POST" id="roleEdit{{ $plane->id }}">
                                                                    @method('PATCH')
                                                                    @csrf
                                                                    <div class="form-group required">
                                                                        <label class="control-label" for="name">
                                                                            Name:
                                                                        </label>
                                                                        <input type="text" class="form-control complete"
                                                                            name="name" required value="{{ $plane->name }}">


                                                                        @error('name')
                                                                            <span class="error">{{ $message }}</span>

                                                                        @enderror

                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary"
                                                                    form="roleEdit{{ $plane->id }}">Save changes
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>

                                        <th>CREATED ON</th>
                                        <th>ACTION</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#role').DataTable();
        });
    </script>
@endsection
