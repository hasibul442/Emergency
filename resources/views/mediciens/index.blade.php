@extends('layouts.master')
@section('title', 'Medicine')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table nowrap table-striped table-sm" id="table2">

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
                            <th class="th-sm">Edit</th>
                            <th class="th-sm">Delete</th>
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
                                    <div class="text-right">
                                        <a class="btn view" href="{{ route('medicines.show', $medicine->id) }}"><i class="fas fa-info"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-right">
                                        <a class="btn edit" href="{{route('medicines.edit', $medicine->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('medicines.destroy', $medicine->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn delete"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
