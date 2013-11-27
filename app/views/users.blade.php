@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user->name }} {{ $email }}</p>
    @endforeach
@stop
