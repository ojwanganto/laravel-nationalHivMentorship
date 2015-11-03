@extends('layouts.master')
@section('title', 'Home Page')

@section('sidebar')
    @parent

    <p>This is defined on child page</p>
@endsection

@section('content')
    <p>Hi User. Feel welcome here</p>
@endsection