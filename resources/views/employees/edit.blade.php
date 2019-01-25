@extends('layout')
@section('content')

@include('formerrors')

<div class="container">
    <form method="POST" action="/employees/{{ $employee->id }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" value = "{{ $employee->firstName }}" placeholder="Employee First Name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" value = "{{ $employee->lastName }}" placeholder="Employee Last Name">
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="tel" class="form-control" name="telephone" value = "{{ $employee->telephone }}" placeholder="Telephone Number">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value = "{{ $employee->email }}" placeholder="Email Address">
        </div>
        <div class="form-group">
            <label for="companyId">Select Company:</label>
                <select class="form-control" name="company_id">
                @foreach ($companies as $company)
                    @if ($employee->company_id == $company->id)
                        <option selected value="{{ $company->id }}">{{ $company->name }}</option>
                    @else
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endif
                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Employee Details</button>
    </form>   
</div>    

@endsection
