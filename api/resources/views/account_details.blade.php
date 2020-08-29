@extends('layouts.app')
@section('content')
    <div class="col-12 text-center">
        <h1 class="font-weight-light">Thank you for joining the young bucks Bank</h1>
        <hr>
        <p class="lead ">This are your credentials</p>
        <p class="lead font-weight-bolder">Account Name: {{$account->name}}</p>
        <p class="lead font-weight-bolder">Account ID: {{$account->id}}</p>
        <p class="lead font-weight-bolder">Account Balance {{$account->balance}}</p>

        <button class="btn btn-lg btn-register btn-block text-uppercase" type="submit">Login</button>
    
    </div>        
@endsection
