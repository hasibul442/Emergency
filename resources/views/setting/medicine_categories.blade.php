@extends('layouts.master')
@section('title', 'Medicine Type')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <table class="display nowrap table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($categories->count() == !0)
                                    @foreach ($categories as $categorie)
                                        <tr>
                                            <td>{{ $categorie->id }}</td>
                                            <td>{{ $categorie->m_type }}</td>
                                            <td>
                                                <form class="insert-form" id="insert-form" method="post"
                                                    action="{{ route('categories.destroy', $categorie->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button name="submit" class="btn btn-danger btn-sm" id="submit"><i
                                                        class="fas fa-eraser"></i></button>
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
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <form class="insert-form" id="insert-form" method="post"
                                    action="{{ route('categories.store') }}">
                                    @csrf
                                    <table class="table table-striped" id="table_field">
                                        <thead>
                                            <tr>
                                                <th> Category </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="title" name="m_type[]"
                                                        required>
                                                </td>
                                                <td>
                                                    <button  class="btn btn-sm"
                                                        style="background-color: #3a86ff;color:#FFF" id="add">
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
                    '         <td><input type="text" class="form-control" id="title" name="m_type[]" required></td>\n' +
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


    @endsection
