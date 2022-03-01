@extends('layouts/contentLayoutMaster')


@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
@endsection

@section('content')
<div class="col-12">
    <div class="card ">
        <div class="card-content">
            <div class="card-header">
                <h4>Lista de directos</h4>
            </div>
            <div class="card-body ">
                <div class="table-responsive">
                    <table class="table  nowrap scroll-horizontal-vertical myTable table-striped w-100">
                        <thead>
                            <tr class="text-center text-dark">
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Ingreso</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($referidos->where('nivel', 1) as $item)
                            <tr class="text-center text-dark">
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}} {{$item->lastname}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{date('d-m-Y', strtotime($item->created_at))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
@endsection
@section('page-script')
<script>
    //datataables ordenes
    $('.myTable').DataTable({
        responsive: false,
        order: [
            [0, "desc"]
        ],
    })
</script>
@endsection