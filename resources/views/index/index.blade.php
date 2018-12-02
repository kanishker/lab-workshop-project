@extends('layouts.default.layout')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<h3>Welcome to Laravel MVC - Sample Project</h3>
<hr>
<p>This Laravel tutorial will take you from the very beginning of an app idea into a real deployable Laravel application.</p>

<img src="{{ asset('assets/images/laravel.png') }}" />
@endsection