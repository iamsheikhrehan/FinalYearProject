@extends('Admin.dashboard')
@section("content")
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">



                    <!-- /.card-header -->
                    <!-- <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Trip Id</th>
                                    <th>Trip Name</th>

                                    <th>Pick up Locations</th>

                                    <th>Pick Up Location</th>
                                    <th>Starting Date</th>
                                    <th>Ending Date</th>
                                    <th>Budget</th>

                                </tr>
                            </thead>


                        </table>
                    </div> -->
                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit & Update Student
                                <a href="{{ url('/manage_trips') }}" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            < <form action="{{ url('/update_trips/'.$edittrips->trip_id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div>
                                    <label for="tripname" class="col-md-4 control-label" name="tripname">Trip Name</label>

                                    <div class="col-md-6">
                                        <input id="tripname" value="{{$edittrips->trip_name}}" type="text" class="form-control" name="tripname">
                                    </div>
                                </div>
                                <div>
                                    <label for="pickuplocation" class="col-md-4 control-label" name="pickuplocation">Pick Up Location</label>

                                    <div class="col-md-6">
                                        <input id="pickuplocation" type="text" value="{{$edittrips->pick_up_locations}}" class=" form-control" name="pickuplocation">
                                    </div>
                                </div>
                                <div>
                                    <label for="startingdate" class="col-md-4 control-label" name="startingdate">Starting Date</label>

                                    <div class="col-md-6">
                                        <input id="startingdate" type="date" class="form-control" name="startingdate" value="{{$edittrips->starting_date}}">
                                    </div>
                                </div>
                                <div>
                                    <label for="endingdate" class="col-md-4 control-label" name="endingdate">Ending Date</label>

                                    <div class="col-md-6">
                                        <input id="endingdate" type="date" class="form-control" name="endingdate" value="{{$edittrips->ending_date}}">
                                    </div>
                                </div>
                                <div>
                                    <label for="budget" class="col-md-4 control-label" name="budget">Budget</label>

                                    <div class="col-md-6">
                                        <input id="budget" type="integer" class="form-control" name="budget" value="{{$edittrips->budget}}">
                                    </div>
                                </div>



                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update </button>
                                </div>

                                </form>

                        </div>

                    </div>
                </div>
                <br>
                <br>


                <!-- /.card-body -->

            </div>
</section>
@endsection