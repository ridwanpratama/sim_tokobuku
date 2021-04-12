@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">SIM Toko Buku</h1>
              <p class="lead">Hi {{ Auth()->user()->name }}, selamat datang!</b></p>
        </div>
    </div>
@endsection