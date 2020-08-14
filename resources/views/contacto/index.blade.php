<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Nunito+Sans:wght@600&display=swap" rel="stylesheet"></head>
<body>
   <div class="jumbotron">
       <h1>Contactos</h1>
   </div>

   @if (session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
   @endif
   @if (session('alert'))
    <div class="alert alert-danger">
      {{ session('alert') }}
    </div>
   @endif
   @if (session('actualizada'))
    <div class="alert alert-success">
      {{ session('actualizada') }}
    </div>
   @endif

            <div class="contenedor">
                <div class="formulario">
                    <form action="contacto" method="GET">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="create" href="contacto/create"><button type="submit" class="btn btn-primary">Crear</button></a>
            </div>

            <table  class="table">
            <thead>
                <tr>
                    <th scope="col" class="campo">Id</th>
                    <th scope="col" class="campo">Nombre</th>
                    <th scope="col" class="campo">Teléfono</th>
                    <th scope="col" class="campo">Dirección</th>
                    <th scope="col" class="campo">E-mail</th>
                    <th scope="col" class="campo">Nacimiento</th>
                    <th scope="col" class="campo">Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($contacto as $cont)
                <tr>
                    <td scope="row">{{$cont -> id}}</td>
                    <td>{{$cont -> nombre_apellido}}</td>
                    <td>{{$cont -> telefono}}</td>
                    <td>{{$cont -> direccion}}</td>
                    <td>{{$cont -> email}}</td>
                    <td>{{$cont -> fecha_nato}}</td>
                    <td class="opcion">

                    <a  href="{{url('/contacto/' .$cont-> id. '/edit')}}"><button type="button" class="opciones btn btn-success">Editar</button></a>
                    <form class="opciones" method="POST" action="{{ url('/contacto/' .$cont -> id) }}">
                    {{ csrf_field() }}
                   @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar el contacto?');" class="opciones btn btn-danger">Eliminar</button> 

                    </form>
                     <form  action="{{ url('/contacto/' .$cont -> id) }}">
                         <a href="{{url('/contacto/' .$cont-> id. '/show')}}"><button type="submit" class="opciones btn btn-info">Detalles</button></a>
                     </form></td>
                </tr>
            </tbody>
                @endforeach
            </table>
                <div class="render" >
                    {{$contacto->render()}} 
                </div>
<style>

.formulario {
    width:80%;
    display: inline-block;

}  

.contenedor{
    width: 50%;
    margin: 0 auto;
}



.input-group{
   width: auto;
}
/* .clearfix::after {
  content: "";
  clear: both;
  display: table;
} */

.table{
    width: 80%;
    margin: 0 auto;
    text-align:center;
}


.render{
    width: 10%;
    margin: 0 auto;
    margin-top: 30px;
}

h1, button, td{
font-family: 'Nunito Sans', sans-serif;
}

h1, th{
    text-transform: uppercase;
}

.opcion{
   width: 300px;
}


 table button{
    width: 30%;
    float: left;
    margin-right: 2px;
}
</style>
</body>
</html>