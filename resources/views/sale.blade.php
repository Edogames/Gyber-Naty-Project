@extends('layouts.main')

@section('title', 'Private sales')

@section('btn')
    <h2 id="header-txt" style="color: #533278;">The Macroeconomic DAO</h2>
@endsection

@section('content')
    <div class="card" id="card">
        <h3 style="text-align: center">To participate in a private sale <br> fill out the following form:</h3>
        <br>
        <form action="{{ route('sale.send') }}" method="POST">
            @method('POST')
            @csrf
            <input class="input-field" required type="text" name="name" placeholder="Name or organization">
            <div id="price">
                <p style="color: #83A400;">minimum quantity</p>
                <p style="color: gray; font-style: italic;" id="second">$100 000</p>
            </div>
            <input class="input-field" required type="text" id="invest" name="invest" placeholder="Amount of investment">
            <p style="color: red" id="err"></p>
            <input type="email" required id="email" name="email" placeholder="Email">
            <button id="submit" type="submit">OK</button>
        </form>
    </div>
@endsection

@section('js')
    let link = location.href
    let splited = link.split('/send');
    if (link.indexOf('/send') > -1){
        location.href = `${splited[0]}/sale`;
    }

    let text = document.getElementById('invest');
    let submit = document.getElementById('submit');
    let errMSG = document.getElementById("err");

    text.addEventListener('input', () => {
        let splited = text.value.split('$');
        let num = Number(splited[1]);
        if (splited[1] == undefined){
            text.value = `$ ${splited[0]}`;
        }else{
            if(num >= 100000){
                text.style.border = "1px solid #4A4A4A";
                errMSG.innerText = "";
                text.value = `$${splited[1]}`;
            }else{
                text.style.border = "1px solid red";
                errMSG.innerText = `You must type more that $100 000 ($${num} is typed).`;
                text.value = `$${splited[1]}`;
            }
        }
    });

    submit.addEventListener("click", (e) => {
        let splited = text.value.split('$');
        let num = Number(splited[1]);
        if(num < 100000){
            e.preventDefault();
        }
    });
@endsection
