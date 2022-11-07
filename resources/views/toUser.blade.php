@extends('layouts.mail')

@section('name', $name)
@section('amount')
    You've sent {{ $amount }} request.
    Our support team will contact you shortly.
@endsection
@section('email')
    {{ $email }}
@endsection
