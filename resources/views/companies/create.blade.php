@extends('layout')
@section('content')

<div class="container">
    <form method="POST" action="/companies">
        @csrf
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Company Name"">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Company Email">
        </div>
        <div class="form-group">
            <label for="web">Email</label>
            <input type="url" class="form-control" name="web" placeholder="Enter Company Website">
        </div>
        <button type="submit" class="btn btn-primary">Create Company</button>
    </form>
</div>

{{-- File uploading... --}}
{{-- https://appdividend.com/2018/08/15/laravel-file-upload-example/ --}}

@endsection
