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
    <p class="text-center text-dark mt-4 mb-5">
        To view the files use the search box in order to search the files. Please enter more than 3 characters 
        in order to search...
    </p>
    <div class="col-12 table-responsive shadow px-4 py-5">
        <table class="table table-bordered file_datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection