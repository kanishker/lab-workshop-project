@extends('layouts.default.layout')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Departments</li>
</ol>
<h3>Departments</h3>
<hr>
@if(session()->has('status'))
    <p class="alert alert-info">
        {{	session()->get('status') }}
    </p>
@endif

<div class="panel panel-default">
    <div class="panel-top-links m-t-sm m-b-sm">
        <a href="#" class="btn btn-secondary btn-xs go-to-button"><i class="fa fa-arrow-left"></i> Go Back</a>
        <a href="{{ route('department.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Department</a>
    </div>
    <div class="panel-body">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach($departments as $department)
    <tr>
        <td>{{$department->dname}}</td>
        <td>{{$department->loc}}</td>
        <td>{{$department->created_at}}</td>
        <td>{{$department->updated_at}}</td>
        <td>
            <a href="{{ route('department.edit', $department->deptno) }}" class="btn btn-success btn-sm">Edit</a>
            <a href="{{ route('department.show', $department->deptno) }}" class="btn btn-info btn-sm">View</a>
            <form action="{{route('department.destroy',$department->deptno)}}" method="POST" style="display:inline-block">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger btn-sm">
                    <span>DELETE</span>
                </button>

            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
    </div>
</div>

@endsection