@extends('layouts.mail')

@section('name', 'Gyber')
@section('amount')
    You've got {{ $amount }} request from {{ $name }}.
@endsection
@section('email')
    User's email: {{ $email }}
@endsection
