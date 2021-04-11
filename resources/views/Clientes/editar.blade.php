@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        .card {
            border-radius: 20px;
        }

        .card-header {
            text-align: center;
        }

        #botones {
            text-align: center;
        }

        #left {
            display: inline-block;
        }

        #right {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card border-secondary mb-3">
            <div class="card-header">
                <h3><i class="far fa-edit"></i> Modificar Registro de Clientes</h3>
            </div>
            <div class="card-body text-secondary">
                <form action="{{ url('/Clientes/' .$cliente->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    @include('Clientes/formulario',['Modo'=>'modificar'])
            </div>
            </form>
        </div>
    </div>
    </div>
    @endsection
</body>

</html>