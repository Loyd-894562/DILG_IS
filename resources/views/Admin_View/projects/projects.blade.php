@extends('Admin_View.layouts.app')

@section('content')
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block mt-2">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="d-flex justify-content-end mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn" style="background-color: #343a40; color:white;" data-toggle="modal"
            data-target="#exampleModal">
            <span class="fas fa-plus-circle"></span> Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #C9282D; color:white;">
                        <h5 class="modal-title" id="exampleModalLabel">Adding New Project </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ url('/admin/projects-create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="container mx-auto">
                                <div class="row">

                                    <div class="form-group">
                                        <label for="program_category">Program Categories:</label>

                                        <select name="program_category" id="program_category" class="form-control"
                                            style="color:dimgray;">
                                            <option selected>Select...</option>
                                            @foreach ($program as $prog)
                                                <option value="{{ $prog->title }}">{{ $prog->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="municipality_id">Municipalities:</label>

                                        <select name="municipality_id" id="municipality_id" class="form-control"
                                            style="color:dimgray;">
                                            <option selected>Select...</option>
                                            @foreach ($municipalities as $municipal)
                                                <option value="{{ $municipal->id }}">{{ $municipal->municipality }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Project Code:</label>
                                            <input type="text" class="form-control" name="proj_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Title:</label>
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Province:</label>
                                            <input type="text" class="form-control" name="province">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Description:</label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Type:</label>
                                            <input type="text" class="form-control" name="type">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Status:</label>
                                            <input type="text" class="form-control" name="status">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Total Cost:</label>
                                            <input type="text" class="form-control" name="total_cost">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Complete Location</label>
                                            <input type="text" class="form-control" name="exact_loc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" style="color:dimgray">Year:</label>
                                            <input type="text" name="year">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><span class="fas fa-save"></span> Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2">

        <div class="card-header d-flex justify-content-between">
            <img src="/img/dilg-main.png" style="height: 40px; width: 40px;" alt="">
            <h1 class="" style="font-size: 21px; font-weight: 450;"><span class="fas fa-address-book"
                    style="color:#C9282D;"></span>Project</h1>

        </div>
        <div>

            <table class="table table-bordered text-center">
                <thead class="text-center" style="background-color:#343a40; color:white;">
                    <tr>
                        <th scope="col">View/Edit</th>
                        <th scope="col">Program Categories</th>
                        <th scope="col">Municipalites</th>
                        <th scope="col">Project Code</th>
                        <th scope="col">Title</th>
                        <th scope="col">Province</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status </th>
                        <th scope="col">Total Cost </th>
                        <th scope="col">Complete Location</th>
                        <th scope="col">Year</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projectsAll as $all)
                        <tr>
                            <td><a href="#" data-toggle="modal" id="project_edit_link" class="btn"
                                    data-target="#all_id{{ $all->id }}"><span
                                        class="text-light btn btn-sm btn-success">View</span></a></td>

                            <div class="modal fade" id="all_id{{ $all->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #C9282D; color:white;">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('admin/projects-update/' . $all->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="container mx-auto">
                                                    <div class="text-center">
                                                        <img src="/img/bohol_seal.png"
                                                            style="height: 150px; width: 150px;" alt="">
                                                    </div>

                                                    <div class="container mx-auto">
                                                        <div class="row">

                                                            <div class="form-group">
                                                                <label for="program_category">Program Categories:</label>

                                                                <select name="program_category" id="program_category"
                                                                    class="form-control" style="color:dimgray;">
                                                                    <option selected>Select...</option>
                                                                    @foreach ($program as $prog)
                                                                        <option value="{{ $prog->title }}">
                                                                            {{ $prog->title }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="municipality_id">Municipalities:</label>

                                                                <select name="municipality_id" id="municipality_id"
                                                                    class="form-control" style="color:dimgray;">
                                                                    <option selected>Select...</option>
                                                                    @foreach ($municipalities as $municipal)
                                                                        <option value="{{ $municipal->id }}">
                                                                            {{ $municipal->municipality }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>




                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Project
                                                                        Code:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="proj_code" value="{{ $all->proj_code }}"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Title:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->title }}" name="title"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Province:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->province }}" name="province">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Description:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->description }}"
                                                                        name="description">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Type:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->type }}" name="type">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Status:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->status }}" name="status">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Total
                                                                        Cost:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->total_cost }}" name="total_cost">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="" style="color:dimgray">Complete
                                                                        Location</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $all->exact_loc }}" name="exact_loc"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        style="color:dimgray">Year:</label>
                                                                    <input type="text" name="year"
                                                                        value="{{ $all->year }}">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><span
                                                    class="fas fa-save"></span>
                                                Update changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <td>{{ $all->program_category }}</td>
                            <td>{{ $all->province }}</td>
                            <td>{{ $all->proj_code }}</td>
                            <td>{{ $all->title }}</td>
                            <td>{{ $all->province }}</td>
                            <td>{{ $all->description }}</td>
                            <td>{{ $all->type }}</td>
                            <td>{{ $all->status }}</td>
                            <td>{{ number_format($all->total_cost, 2) }}</td>
                            <td>{{ $all->exact_loc }}</td>
                            <td>{{ $all->year }}</td>
                            <td><a href="#" data-toggle="modal" id="project_delete_link" class="btn"
                                    data-target="#project_delete_link{{ $all->id }}"><span
                                        class="text-danger fas fa-trash-alt"></span></a></td>

                            <div class="modal fade" id="project_delete_link{{ $all->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><span
                                                    class="fas fa-exclamation-circle text-danger"
                                                    style="font-size: 30px;"></span> </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form action="{{ url('admin/projects-delete/' . $all->id) }}" method="GET"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('GET')

                                                <div class="container mx-auto">
                                                    Are you sure you want to delete this permanently?
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Delete Permanently</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection