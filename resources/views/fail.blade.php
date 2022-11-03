@extends('layouts.main')

@section('title', 'Something went wrong.')

@section('btn')
    <h2 id="header-txt" style="color: #533278;">The Macroeconomic DAO</h2>

    <a href="{{ URL::route('home') }}" class="btn">Home</a>
@endsection

@section('content')
    <div class="card" id="card">
        <div class="d-flex">
            <h3 style="text-align: center">Something went wrong.<br>Please try again</h3>
        </div>
        <a href="{{ URL::route('sale') }}" class="glow-on-hover" style="margin-bottom: 0;">Private Sale</a>
    </div>
@endsection

@section('js')
    let link = location.href
    let splited = link.split('/send');
    if (link.indexOf('/send') > -1){
        location.href = `${splited[0]}/fail`;
    }
@endsection
