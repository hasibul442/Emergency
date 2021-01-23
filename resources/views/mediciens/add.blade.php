@extends('layouts.master')
@section('title', 'Medicine')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center text-danger ">Medicine Details Add</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{route('medicines.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Medicine Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="name"
                                                        id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Generic Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="g_name" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="m_type">Type</label>
                                                <div class="position-relative">
                                                    <select class="form-control" id="m_type" name="m_type">
                                                        
                                                    @foreach($categories  as $categorie)
                                                        <option>{{$categorie->m_type}}</option>
                                                    @endforeach
                                                      </select>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Power</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="power" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="company">Company</label>
                                                <div class="position-relative">
                                                    <select class="form-control" id="company" name="company">
                                                        <option selected disabled value="">choose an option</option>
                                                    @foreach($companies  as $company)
                                                        <option>{{$company->company}}</option>
                                                    @endforeach
                                                      </select>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Price</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="price" id="first-name-icon">
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
