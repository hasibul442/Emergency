@extends('layouts.master')
@section('title','Ambulance')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-dark text-center">Ambulance Details</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('ambulances.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Driver Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="driver_name" id="first-name-icon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Driver Phone Number</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="driver_phone" id="first-name-icon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Hospital Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="hospital_name" id="first-name-icon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Location</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="location" id="first-name-icon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="company">Ambulance Type</label>
                                            <div>
                                                <select class="form-control" id="company" name="ambulance_type">
                                                    <option selected disabled value="">Choose an option</option>
                                                    <option>AC</option>
                                                    <option>Non-AC</option>
                                                    <option>Mobile ICU</option>
                                                    <option>Life Support</option>
                                                    <option>Freezer</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="first-name-icon">Price</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control"  name="price" id="first-name-icon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection