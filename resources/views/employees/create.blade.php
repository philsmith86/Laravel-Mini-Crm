@extends('layout')
@section('content')

@include('formerrors')

<div class="container">
    <form method="POST" action="/employees">
        @csrf
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" value = "{{ old('firstName') }}" placeholder="Employee First Name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" value = "{{ old('lastName') }}" placeholder="Employee Last Name">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="tel" class="form-control" name="telephone" value = "{{ old('telephone') }}" placeholder="Telephone Number">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value = "{{ old('email') }}" placeholder="Email Address">
        </div>
        <div class="form-group">
            <label for="companyId">Select Company:</label>
                <select class="form-control" name="company_id">
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add New Employee</button>
    </form>   
</div>    

@endsection
