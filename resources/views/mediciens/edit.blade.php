@extends('layouts.master')
@section('title', 'Medicine')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Medicines List</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{route('medicines.update')}}" method="GET" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">ID</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="id"
                                                    id="first-name-icon" readonly value="{{$medicines->id}}">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-portrait" style="color: #e63946"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Medicine Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="name"
                                                    id="first-name-icon"value="{{$medicines->name}}">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-prescription" style="color: #e63946"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Generic Name</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="g_name" id="first-name-icon"value="{{$medicines->g_name}}">
                                                <div class="form-control-icon">
                                                    <i class="fad fa-atom " style="color: #e63946"></i>
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
                                                        <option value="{{$categorie->m_type}}" @if($medicines->m_type == $categorie->m_type) selected @endif>{{$categorie->m_type}}</option>
                                                    @endforeach
                                                      </select>
                                                      <div class="form-control-icon">
                                                        <i class="fas fa-pills" style="color: #e63946"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Power</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="power" id="first-name-icon"value="{{$medicines->power}}">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-prescription-bottle" style="color: #e63946"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="company">Company</label>
                                                <div class="position-relative">
                                                    <select class="form-control" id="company" name="company">
                                                      
                                                    @foreach($companies  as $company)
                                                        <option value="{{$company->company}}" @if($medicines->company == $company->company) selected @endif>{{$company->company}}</option>
                                                    @endforeach
                                                      </select>
                                                      <div class="form-control-icon">
                                                        <i class="fas fa-building" style="color: #e63946"></i>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
    
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Price <span class="text-danger">*</span> <small>decimale/float number</small></label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="price" id="first-name-icon"value="{{$medicines->price}}">
                                                <div class="form-control-icon">
                                                    <i class="fas fa-tags" style="color: #e63946"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
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