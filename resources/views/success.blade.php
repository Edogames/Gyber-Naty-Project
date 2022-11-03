@extends('layouts.main')

@section('title', 'Success!')

@section('btn')
    <h2 id="header-txt" style="color: #533278;">The Macroeconomic DAO</h2>

    <a href="{{ URL::route('home') }}" class="btn">Home</a>
@endsection

@section('content')
    <div class="card" id="card">
        <div class="d-flex">
            <h3 style="text-align: center">Your application has been accepted, our support team will contact you shortly</h3>
        </div>
        <a href="{{ URL::route('home') }}" class="glow-on-hover" style="margin-bottom: 0;">Home</a>
    </div>
@endsection

@section('js')
    let link = location.href
    let splited = link.split('/send');
    if (link.indexOf('/send') > -1){
        location.href = `${splited[0]}/success`;
    }
@endsection
