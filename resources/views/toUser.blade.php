@extends('layouts.mail')

@section('name', $name)
@section('amount')
    You've sent {{ $amount }}.
    Our support team will contact you shortly.
@endsection
@section('email')
    {{ $email }}
@endsection
