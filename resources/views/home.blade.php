<style>
    a {

        padding: 0 25px;
        font-size: 30px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        margin-top: 30px;
    }

    div {
        font-size: 30px;
        text-transform: uppercase;
    }

    #Add {
        font-size: 100px;
        font-weight: 600px;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
    }

    .Cen {
        text-align: center;
        margin-top: 200px;
        width: 740px;
        height: 120px;
        border: 4px solid grey;
        margin: 0 auto;
        margin-top: 200px;
    }
</style>
<title>Cosmio_Tech</title>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cosmio_Tech') }}</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in !') }}
                </div>
            </div>
            <div class="Cen">you are in and its your world
                handle it properly
            </div>
           
            <div id="Add">
                <a href="Companies_show">Companies</a>
                <a href="Employees_show">Employees</a>
            </div>
        </div>
    </div>

</div>
@endsection