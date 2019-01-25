@extends('layout')
@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Companies</th>
            </tr>
            <tr>
                <td>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td><a href='{{ $company->web }}'>{{ $company->web }}</a></td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href='/companies/{{ $company->id }}/edit' role="button">Edit</a>
                                        <form method = "POST" action="/companies/{{ $company->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href='/companies/create' role="button">Create New Company</a>
                </td>        
            </tr>                         
        </thead>
    </table>    
</div>
@endsection