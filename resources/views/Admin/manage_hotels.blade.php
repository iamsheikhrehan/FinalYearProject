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
                    <form method="POST" action="/create_hotelbooking" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                            <label for="Hotelname" class="col-md-4 control-label" name="Hotelname">Hotelname</label>

                            <div class="col-md-6">
                                <input id="Hotelname" type="text" class="form-control" name="Hotelname">
                            </div>
                        </div>

                        <div>
                            <label for="Rooms" class="col-md-4 control-label" name="Rooms">Rooms</label>

                            <div class="col-md-6">
                                <input id="Rooms" type="int" class="form-control" name="Rooms">
                            </div>
                        </div>
                        <div>
                            <label for="RoomType" class="col-md-4 control-label" name="RoomType">RoomType</label>

                            <div class="col-md-6">
                                <input id="RoomType" type="text" class="form-control" name="RoomType">
                            </div>
                        </div>
                        <div>
                            <label for="Location" class="col-md-4 control-label" name="Location">Location</label>

                            <div class="col-md-6">
                                <input id="Location" type="text" class="form-control" name="Location">
                            </div>
                        </div>
                        <div>
                            <label for="Budget" class="col-md-4 control-label" name="Budget">Budget</label>

                            <div class="col-md-6">
                                <input id="Budget" type="string" class="form-control" name="Budget">
                            </div>
                        </div>
                        <div>
                            <label for="no of rooms" class="col-md-4 control-label" name="no of rooms">no of rooms</label>

                            <div class="col-md-6">
                                <input id="no of rooms" type="integer" class="form-control" name="no of rooms">
                            </div>
                        </div>
                        <div>
                            <label for="Status" class="col-md-4 control-label" name="Status">Status</label>

                            <div class="col-md-6">
                                <input id="Status" type="integer" class="form-control" name="Status">
                            </div>
                        </div>
                        <div>
                            <label for="role" class="col-md-4 control-label" name="role">role</label>

                            <div class="col-md-6">
                                <input id="role" type="integer" class="form-control" name="role">
                            </div>
                        </div>
                        <div>
                            <label for="Description" class="col-md-4 control-label" name="Description">Description</label>

                            <div class="col-md-6">
                                <input id="Description" type="text" class="form-control" name="Description">
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Hotel Id</th>
                                    <th>Hotel Name</th>

                                    <th>Rooms</th>

                                    <th>Room Type</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>No of Rooms</th>
                                    <th>Description</th>
                                    <th>Budget</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                    @foreach ($hotelbooking as $items)
                    <tr>

                        <td>{{$items->hotel_id}}</td>
                        <td>{{$items->hotel_name}}</td>
                        <td>{{$items->rooms}}</td>
                        <td>{{$items->room_type}}</td>
                        <td>{{$items->location}}</td>
                        <td>{{$items->status}}</td>
                        <td>{{$items->no_of_rooms}}</td>
                        <td>{{$items->description}}</td>
                        <td>{{$items->bugdet}}</td>
                        <td><a class="btn btn-danger" href="{{ url('/delete_hotels/'.$items->hotel_id) }}">Delete</a></td>
                        <td><a class="btn btn-danger" href="{{ url('/edit_hotels/'.$items->hotel_id) }}">Edit</a></td>


                    </tr>
                    @endforeach
                </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
</section>
@endsection