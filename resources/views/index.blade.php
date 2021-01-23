@extends('layouts.master')
@section('title','Dashboard')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
    </div>

    <section class="section">
        <div class="row mb-2">

            <!--------------Card-1-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-1  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fal fa-users fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Users</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">{{$count1}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------Card-2-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-2  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="far fa-capsules fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">medicine</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">{{$count}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------Card-3-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-3  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fad fa-ambulance fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Ambulance</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">{{$count4}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--------------Card-4-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-4  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fad fa-hospital-alt fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Hospital</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">34</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------Card-5-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-5  p-0">
                        <div>
                            <div class='px-3 py-3  justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fad fa-user-md fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Doctors</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">{{$count3}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------Card-6-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-6  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fal fa-user-tie fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Employees</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------Card-7-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-7  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fas fa-building fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Companies</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">{{$count2}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------Card-8-------------->
            <div class="col-12 col-sm-3">
                <div class="card card-statistic ">
                    <div class="card-body dashboard-card-body-8  p-0">
                        <div>
                            <div class='px-3 py-3 justify-content-between'>
                                <div class="row">
                                    <div class="col-sm-4 my-auto text-center">
                                        <i class="fad fa-wallet fa-3x dashboard-card-icon"></i>
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title  text-center">Balance</h4>
                                        <div>
                                            <p class="text-center dashboard-card-text">$500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection
