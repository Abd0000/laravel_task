@extends('base')


@section('content')
<h2>Studnets Page</h2>
@foreach ($students as $student)
<x-single-student :student="$student"/>
    @endforeach
    
@endsection