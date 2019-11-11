@extends('layouts.app')

@section('content')
    <div class="background">

        <div class="cont1">
            <p>Welcome To</p>
            <h1><strong>LockerNich</strong></h1>
        </div>

    </div>

    <div class="formRegist">
        <div style="margin: 32px 12px 40px 12px">
            <h3>Welcome</h3>
        </div>
        <form method="POST" action="{{ url('/register') }}">
            @csrf
            <input type="text" name="namadepan" placeholder="nama depan">
            <input type="text" name="namabelakang" placeholder="nama belakang">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <input type="password" name="re-TypePass" placeholder="re-Type Password">
            <br>
            <br>
            <button type="submit" class="button1">Registration</button>
        </form>
    </div>
@endsection
