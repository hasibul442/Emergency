@extends('layouts.master')
@section('title', 'Medicine')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-sm" id="table2">

                    <thead>
                        <tr>
                            <th class="th-sm">#</th>
                            <th class="th-sm">Name</th>
                            <!--<th class="th-sm">Generic name</th>-->
                            <th class="th-sm">Type</th>
                            <th class="th-sm">Power</th>
                            <th class="th-sm">Company</th>
                            <th class="th-sm">Price (tk)</th>
                            <th class="th-sm">View</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($medicines as $medicine)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $medicine->name }}</td>
                               <!-- <td>{{ $medicine->g_name }}</td> -->
                                <td>{{ $medicine->m_type }}</td>
                                <td>{{ $medicine->power }}</td>
                                <td>{{ $medicine->company }}</td>
                                <td>{{ $medicine->price }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                             <div class="text-right">
                                                <a class="btn view m-0" href="{{ route('medicines.profile', $medicine->id) }}"><i class="fas fa-info"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-right">
                                                <a class="btn edit m-0" href="{{route('medicines.edit', $medicine->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <form action="{{ route('medicines.destroy', $medicine->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn delete m-0"><i class="fas fa-trash"></i></button>
                                            </form>
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
            
            responsive: {
        details: false
    },
    scrollX:true,
    scrollCollapse: true
        });
        
    });

</script>
@endsection
