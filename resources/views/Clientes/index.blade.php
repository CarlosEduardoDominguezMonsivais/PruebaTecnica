@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <style>
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
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
    <br></br>
    <br></br>
    @if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
      {{Session::get('Mensaje') }}
    </div>

    @endif

    <div class="container">
      <a href="{{ url('Clientes/create') }}" class="btn btn-dark"><i class="fas fa-plus"></i> Agregar Clientes </a>
      </br>
      </br>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-user-friends"></i> Nombre completo</th>
            <th scope="col"><i class="far fa-envelope"></i> Correo </th>
            <th scope="col"><i class="fas fa-calendar-day"></i> Fecha de nacimiento </th>
            <th scope="col"><i class="fas fa-phone"></i> Telefóno </th>
            <th scope="col"><i class="far fa-edit"></i> Modificar </th>
            <th scope="col"><i class="fas fa-trash"></i> Eliminar </th>
          </tr>
        </thead>
        <tbody>
          @foreach($clientes as $cliente)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cliente->Nombres}} {{$cliente->Apellido_Paterno}} {{$cliente->Apellido_Materno}}</td>
            <td>{{$cliente->Correo}}</td>
            <td>{{$cliente->Fecha_de_Nacimiento}}</td>
            <td>{{$cliente->Telefono}}</td>
            <td>
              <a class="btn btn-primary" href="{{ url('/Clientes/'.$cliente->id.'/edit') }}">Editar</a>
            <td>
              <form method="post" class="formulario" action="{{ url('/Clientes/'.$cliente->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </td>
            </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $clientes->links() }}
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  @if(session('eliminar')=='okey')
  <script>
    Swal.fire(
      'Eliminado!',
      'El registro fue eliminado exitosamente.',
      'success'
    )
  </script>
  @endif

  <script>
    $('.formulario').submit(function(e) {
      e.preventDefault();

      Swal.fire({
        title: '¿Estas seguro que quieres eliminar este registro?',
        text: "¡Después de aceptar ya no se podran revertir los cambios!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isConfirmed) {
          this.submit();
        }
      })
    });
  </script>
  @endsection

</body>

</html>