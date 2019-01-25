@extends('layout')
@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Employees</th>
            </tr>
            <tr>
                <td>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->firstName }}</td>
                                    <td>{{ $employee->lastName }}</td>
                                    <td>{{ $employee->company->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->telephone }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href='/employees/{{ $employee->id }}/edit' role="button">Edit</a>
                                        <form method = "POST" action="/employees/{{ $employee->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href='/employees/create' role="button">Add New Employee</a>
                </td>       
            </tr>                         
        </thead>
    </table>    
</div>
@endsection