@extends('layouts.default.layout')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Departments</li>
    </ol>
    <h3>Department #123</h3>
    <hr>
    @if(session()->has('status'))
        <p class="alert alert-info">
            {{	session()->get('status') }}
        </p>
    @endif

    <div class="panel panel-default">

        <div class="col-sm-12 col-sm-offset-3">

            <div class="panel-top-links m-t-sm m-b-sm float-lg-right">
                <a href="#" class="btn btn-secondary btn-xs go-to-button" id="go-back"><i class="fa fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="panel-body">
                <div class="col-sm-6 dataview">
                    <table style="width:100%">
                        <tr>


                            <th>Name:</th>
                            <td>{{$department->dname}}</td>
                        </tr>
                        <tr
                            <th>Location:</th>
                            <td>{{$department->loc}}</td>
                        </tr>
                        <tr>
                            <th>Created at:</th>
                            <td>{{$department->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Modified at:</th>
                            <td>{{$department->updated_at}}</td>
                        </tr>

                    </table>


                </div>

            </div>

        </div>
    </div>

@endsection