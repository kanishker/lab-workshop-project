@extends('layouts.default.layout')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Departments</li>
    </ol>
    <h3>Add new department</h3>
    <hr>
    @if(session()->has('status'))
        <p class="alert alert-danger">
            {{	session()->get('status') }}
        </p>
    @endif

    <div class="panel panel-default">

        <div class="col-sm-12 col-sm-offset-3">

        <div class="panel-top-links m-t-sm m-b-sm float-lg-right">
            <a href="#" class="btn btn-secondary btn-xs go-to-button"><i class="fa fa-arrow-left"></i> Go Back</a>
        </div>
        <div class="panel-body">

            <div class="col-sm-6">
            {{ Form::open(['url' => route('department.store'), 'method' => 'POST' ]) }}
            @include('department.__form')
            {{ Form::close() }}

            </div>

        </div>

        </div>
    </div>

@endsection