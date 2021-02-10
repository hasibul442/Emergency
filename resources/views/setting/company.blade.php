@extends('layouts.master')
@section('title', 'Pharmaceutical Companies')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($companies->count() == !0)
                            @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->company }}</td>
                                <td>
                                    <form class="insert-form" id="insert-form" method="post"
                                        action="{{ route('company.destroy', $company->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button name="submit" class="btn btn-danger btn-sm" id="submit"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3" class="text-center">No Data Found</td>
                            <tr>
                                @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="insert-form" id="insert-form" method="post"
                                action="{{ route('company.store') }}">
                                @csrf
                                <table class="table  nowrap table-borderless " id="table_field">
                                    <thead>
                                        <tr>
                                            <th> Company Name </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="title" name="company[]"
                                                    required>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm" style="background-color: #3a86ff;color:#FFF"
                                                    id="add">
                                                    <i class="fas fa-layer-plus"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br />
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success" name="submit" id="submit"
                                        value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        var html = '<tr>\n' +
            '         <td><input type="text" class="form-control" id="title" name="company[]" required></td>\n' +
            '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove"><i class="fas fa-eraser"></i> </button> </td>\n' +
            '       </tr>';

        var x = 1;
        $("#add").click(function() {
            $("#table_field").append(html);
        });
        $("#table_field").on('click', '#remove', function() {
            $(this).closest('tr').remove();
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#table2').DataTable({
            "paging": true,
        });

    });
    </script>


    @endsection