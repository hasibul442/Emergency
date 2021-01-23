@extends('layouts.master')
@section('title', 'Doctors')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-dark text-center">Doctor Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('doctors.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon">Doctor Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="name" id="first-name-icon"
                                                        placeholder="Dr. Devid Jon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-12">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="degree">Degree</label>
                                                    <div class="position-relative">
                                                        <textarea rows="4" type="text" class="form-control" name="degree"
                                                            id="degree"
                                                            placeholder="FCBS- XYZ medical college, MBBS-ABC Medeical College"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Chamber Location</label>
                                                    <div class="position-relative">
                                                        <textarea rows="4" type="text" class="form-control"
                                                            name="chamber_location" id="first-name-icon"
                                                            placeholder="Dhaka,Mirpur-12"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group ">
                                                <label for="first-name-icon">Specialist</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="specialist"
                                                        id="first-name-icon" placeholder="Diabetes, Thyroid & Hormone Specialist">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon">Hospital Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="hospital_name"
                                                        id="first-name-icon" placeholder="ABC Hospital">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-12">

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Visiting Day</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" name="visiting_day"
                                                            id="first-name-icon" placeholder="Sat, Sun, Mon">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="first-name-icon">Visiting Time</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" name="visiting_time"
                                                            id="first-name-icon" placeholder="4pm-7pm">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-group ">
                                                <label for="first-name-icon">Appointment Phone Number</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="phone_number"
                                                        id="first-name-icon" placeholder="+016********">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-icon">Price(tk)</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="price"
                                                        id="first-name-icon" placeholder="1000.00">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
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
