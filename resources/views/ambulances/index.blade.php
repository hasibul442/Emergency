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
                            <th class="th-sm">Driver Name</th>
                            <th class="th-sm">Hospital Name</th>
                            <th class="th-sm">Location</th>
                            <th class="th-sm">Ambulance Type</th>
                            <th class="th-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ambulances as $ambulance)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $ambulance->driver_name }}</td>
                                <td>{{ $ambulance->hospital_name }}</td>
                                <td>{{ $ambulance->location}}</td>
                                <td>{{ $ambulance->ambulance_type}}</td>
                                <td>
                                    <div>

                                        <div class="row">
                                            <div class="col-sm-6 ">
                                                <div class="text-right">
                                                    <a class="btn edit" href="#"><i class="fas fa-pencil-alt"></i></a>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <form action="{{ route('ambulances.destroy', $ambulance->id) }}" method="post">
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
<script>
    $(document).ready(function() {
        $('#table2').DataTable({
            "autoWidth": false,
            scrollX:true,
            responsive:true,
        });
    });

</script>
@endsection
