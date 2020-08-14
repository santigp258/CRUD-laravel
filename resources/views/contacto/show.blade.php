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
       <h1>Vista de Contacto</h1>
   </div>

   
                <div class="contenedor">
                    <div class="formulario">
                    <form class="form" action="{{ ( url('/contacto/' .$cont->id ) )}}" method="post" >
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}

                          <div class="container">
                              <div class="form-group row">
                                <label for="nombre" class="col-sm-2 col-form-label">{{'Nombre'}}</label>
                                <div class="col-sm-10">
                                  <input type="text" disabled="disabled" class="form-control" name="nombre_apellido" id="nombre" placeholder="Nombre y apellido" value="{{ $cont->nombre_apellido }}">
                                </div>
                              </div>
    
                              <div class="form-group row">
                                <label for="tel" class="col-sm-2 col-form-label">{{'Teléfono'}}</label>
                                <div class="col-sm-10">
                                  <input type="number" disabled="disabled"  class="form-control" name="telefono" id="tel" placeholder="Teléfono" value="{{ $cont->telefono }}">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="direccion" class="col-sm-2 col-form-label">{{'Dirección'}}</label>
                                <div class="col-sm-10">
                                  <input type="text" disabled="disabled"  class="form-control" name="direccion" id="direccion" placeholder="Direccion" value="{{ $cont->direccion }}">
                                </div>
                              </div>
    
                              <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">{{'Email'}}</label>
                                <div class="col-sm-10">
                                  <input type="text" disabled="disabled"   class="form-control" name="email" id="email" placeholder="Email" value="{{ $cont->email }}">
                                </div>
                              </div>
    
                              <div class="form-group row">
                                <label for="nacimiento" class="col-sm-2 col-form-label">{{'Nacimiento'}}</label>
                                <div class="col-sm-10">
                                  <input type="date"  disabled="disabled"  class="form-control" name="fecha_nato" id="nacimiento" value="{{ $cont->fecha_nato }}">
                                </div>
                              </div>
                          </div>
                                        <div class="bottom">
                                          <a href="{{url('/contacto')}}"><button type="button" class="btn btn-danger">Volver</button></a>
                                        </div>
                        </form>
                    </div>
                </div>
            
<style>

.contenedor{
    width:50%;
    margin: 0 auto;
   
    padding: 40px;
    border-radius: 40px; 
}  

.container{
    margin: 0 auto;
    margin: 20px;
    margin-top: 80px;
}
.formulario{
    text-align: center;
    width: 70%;
    height: 500px;
    margin: 0 auto;
    border: 1px solid;
    border-radius: 40px; 
    background-color: #e1e1e1;
}

.form-group input{
    margin-left: 80px;
    width: 300px;
}

div.bottom a button{
  margin-bottom: 20px;
}

div.bottom input{
  margin-bottom: 20px;
}
div.form-group{
font-family: 'Nunito Sans', sans-serif;
font-size: 1.4em;
}

h1, th{
    text-transform: uppercase;
}

.jumbotron{
    background-color: rgba(233, 31, 7 );
    color: white;
}
</style>
</body>
</html>