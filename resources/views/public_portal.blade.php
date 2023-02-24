@push('css')
<style>
    .btn {
        width: 250px;
    }
</style>
@endpush

@extends('base_layout')
@section('content')
<div class="row mt-5">
    <h3 class="text-center text-uppercase">View And Download Files</h3>
    <div class="col-12 table-responsive shadow px-4 py-5">
        <table class="table table-bordered file_datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection