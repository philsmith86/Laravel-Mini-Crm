@extends('layout')
@section('content')

<div class="container">
    <form method="POST" action="/companies/{{ $company->id }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $company->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $company->email }}">
        </div>
        <div class="form-group">
            <label for="web">Email</label>
            <input type="url" class="form-control" name="web" placeholder="Enter Website" value="{{ $company->web }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit Changes</button>
    </form>
</div>

@endsection

