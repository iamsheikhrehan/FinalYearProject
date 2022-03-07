@extends('Admin.dashboard')
@section("content")
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Manage Vehicals</h3>
                    </div>


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
                    <form method="POST" action="/create" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                            <label for="tripname" class="col-md-4 control-label" name="tripname">Trip Name</label>

                            <div class="col-md-6">
                                <input id="tripname" type="text" class="form-control" name="tripname">
                            </div>
                        </div>

                        <div>
                            <label for="pickuplocation" class="col-md-4 control-label" name="pickuplocation">Pick Up Location</label>

                            <div class="col-md-6">
                                <input id="pickuplocation" type="text" class="form-control" name="pickuplocation">
                            </div>
                        </div>
                        <div>
                            <label for="startingdate" class="col-md-4 control-label" name="startingdate">Starting Date</label>

                            <div class="col-md-6">
                                <input id="startingdate" type="date" class="form-control" name="startingdate">
                            </div>
                        </div>
                        <div>
                            <label for="endingdate" class="col-md-4 control-label" name="endingdate">Ending Date</label>

                            <div class="col-md-6">
                                <input id="endingdate" type="date" class="form-control" name="endingdate">
                            </div>
                        </div>
                        <div>
                            <label for="budget" class="col-md-4 control-label" name="budget">Budget</label>

                            <div class="col-md-6">
                                <input id="budget" type="integer" class="form-control" name="budget">
                            </div>
                        </div>
                        <div>
                            <label for="image" class="col-md-4 control-label" name="image">image</label>

                            <div class="col-md-6">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>

                        <th>Trip Id</th>
                        <th>Trip Name</th>

                        <th>Pick Up Locations</th>

                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Budgets</th>

                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($uploadtrips as $items)
                    <tr>

                        <td>{{$items->trip_id}}</td>
                        <td>{{$items->trip_name}}</td>
                        <td>{{$items->pick_up_locations}}</td>
                        <td>{{$items->starting_date}}</td>
                        <td>{{$items->ending_date}}</td>
                        <td>{{$items->budget}}</td>
                        <td><a class="btn btn-danger" href="{{ url('/delete_trips/'.$items->trip_id) }}">Delete</a></td>
                        <td><a class="btn btn-danger" href="{{ url('/edit_trips/'.$items->trip_id) }}">Edit</a></td>


                    </tr>
                    @endforeach
                </tbody>

            </table>

            <!-- /.card-body -->

        </div>
</section>
@endsection