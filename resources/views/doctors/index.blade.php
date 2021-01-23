@extends('layouts.master')
@section('title', 'Doctors Details')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="display nowrap" id="table2"style="width:100%">

                    <thead>
                        <tr>
                            <th class="th-sm">#</th>
                            <th class="th-sm">ID</th>
                            <th class="th-sm">Name</th>
                            <th class="th-sm">Degree</th>
                            <th class="th-sm">Chamber Location</th>
                            <th class="th-sm">Specialist</th>
                            <th class="th-sm">Hospital Name</th>
                            <th class="th-sm">Visiting Day</th>
                            <th class="th-sm">Visiting Time</th>
                            <th class="th-sm">Appointment Number</th>
                            <th class="th-sm">Price (tk)</th>
                            <th class="th-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $doctor->id }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->degree }}</td>
                                <td>{{ $doctor->chamber_location }}</td>
                                <td>{{ $doctor->specialist }}</td>
                                <td>{{ $doctor->hospital_name }}</td>
                                <td>{{ $doctor->visiting_day }}</td>
                                <td>{{ $doctor->visiting_time }}</td>
                                <td>{{ $doctor->phone_number }}</td>
                                <td>{{ $doctor->price }}</td>
                                <td>
                                    <div>

                                        <div class="row">
                                            <div class="col-sm-6 ">
                                                <div class="text-right">
                                                    <a class="btn edit" href="#"><i class="fas fa-pencil-alt"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn delete"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>



                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>

@endsection
