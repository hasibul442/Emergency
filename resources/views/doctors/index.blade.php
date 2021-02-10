@extends('layouts.master')
@section('title', 'Doctors Details')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table" cellspacing="0" width="100%" id="table2">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Chamber Location</th>
                            <th>Specialist</th>
                            <th>Hospital Name</th>
                            <th>Visiting Day</th>
                            <th>Visiting Time</th>
                            <th>Appointment Number</th>
                            <th>Price (tk)</th>
                            <th>Action</th>
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

</div>
<script>
$(document).ready(function() {
    $('#table2').DataTable({
        "paging": true,
    });

});
</script>

@endsection