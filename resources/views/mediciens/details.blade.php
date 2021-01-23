@extends('layouts.master')
@section('title', 'Medicine')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Form with Icons</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{route('medicines.update')}}" method="GET" enctype="multipart/form-data">
                            @csrf
                            @method('GET')
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection