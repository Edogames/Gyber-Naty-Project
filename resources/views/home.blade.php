@extends('layouts.main')

@section('title', 'home')

@section('btn')
    <th>
        <a href="{{ asset('pdf/info.pdf') }}" target="_blank">
            <h2 id="chosen">Lite Paper</h2>
        </a>
    </th>
    <th>
        <a href="{{ URL::route('sale') }}" class="btn">Private Sale</a>
    </th>
@endsection

@section('content')
    <h1 class="title" id="title">Welcome to the future</h1>
    <h1 class="subtitle" id="subtitle">The Macroeconomic DAO</h1>

    <a href="https://bscscan.com/token/0xEbaD243C0C12f61E980AAE7F694914dd21F7FF42" target="_blank" class="button glow-on-hover">Contract Adress</a>

    <div class="text">
        <h5>Millions of users can spend</h5>
        <h5>billions on their interests</h5>
    </div>
@endsection

@section('js')
    let link = location.href
    let splited = link.split('/send');
    if (link.indexOf('/send') > -1){
        location.href = splited[0];
    }
@endsection
