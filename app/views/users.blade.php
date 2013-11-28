@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user->name }}<br><br>{{ $user->email }}</p>
    @endforeach
@stop
