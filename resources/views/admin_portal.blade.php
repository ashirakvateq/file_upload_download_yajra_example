@push('css')
<style>
    .btn {
        width: 250px;
    }
</style>
@endpush

@extends('base_layout')
@section('content')
@if(session()->has('success'))
<div class="row my-2 w-100">
    <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
        {{ session()->get('success') }}
    </div>
</div>
@endif
<div class="row">
    <h3 class="text-center text-uppercase">File Upload And View</h3>
    <form class="shadow px-4 py-5" action="{{route('file.submit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for=""></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="File Name">
            @error('name')
            <div class="text-danger mt-2">Please choose another name. File name should be unique</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <input type="file" class="form-control" name="file" id="file">
            @error('file')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="row justify-content-end mb-3">
            <button class="btn btn-primary me-2">Upload</button>
        </div>
    </form>
</div>
<div class="row mt-5">
    <h3 class="text-center text-uppercase">File Records Below</h3>
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