@extends('layouts.master')
@section('title', 'Medicine')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary pb-4">{{$medicines->name}}</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="" alt="" srcset="">
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-6"><p>Generic Name: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->g_name}}</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><p>Type: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->m_type}}</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><p>Power: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->power}}</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><p>Company: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->company}}</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><p>Price: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->price}}</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><p>Add Date: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->created_at}}</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><p>Update: </p></div>
                                    <div class="col-6"><p class="text-right">{{$medicines->updated_at}}</p></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection