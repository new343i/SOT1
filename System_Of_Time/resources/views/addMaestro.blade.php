<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>
<body style="background-color: grey;">
    <style>
        div.Formcarta1{
            border-color: black;
            border-style: solid;
            border-radius: 5px;
            margin-top: 10px;
            position: relative;
            width: 50%;
            background-color: white;
            
        }
    
        fieldset.fieldcarta1{
            width: 48%;
            margin: 4px;
            float: left;
        }
        fieldset.fieldcarta2{
            width: 48%;
            margin: 4px;
            float: right;
        }
    </style>
<h1></h1>
    <form method="POST" action="{{route("bdd_sot.store")}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row g-3 align-items-center">
    <div class="container Formcarta1 mt-5">
        <div class="text-center mt-2">
            <h2 class="fw-normal text-center">Agregar Maestro</h2>
        </div>
    <div class="row g-3 align-items-center">
        <fieldset class="fieldxd">
            <div class="form-group">

        <div class="form-group">
            <label for="inputName" class="form-label">Nombre</label>
            <input name="N_maestro" type="text" class="form-control" id="inputName">
        </div>
        <div class="col-12">
            <label for="inputEmpleado" class="form-label">Numero de empleado</label>
            <input name="Num_maestro" type="number" onchange="ValidarNEmpleado(this.value)" class="form-control" id="inputEmpleado">
        </div>
        <div class="col-12">
            <label for="inputArea" class="form-label">Area de adscripción</label>
            <input name="Area_maestro" type="text" class="form-control" id="inputArea">
        </div>
        </fieldset>
        <fieldset class="fieldxd2">
        <div class="col-12">
            <br>
            <label for="inputTutor" class="form-label">Tutorado</label>
            <input name="Tutorado" type="text" class="form-control" id="inputTutor">
        </div>
        <br>
        <div class="col-12">
            <label for="inputClaveM4" class="form-label">Clave materia</label>
            <input name="Clave_materia" type="text" class="form-control" id="inputClaveM4">
        </div>
            <br>
        </fieldset>
        <div class="text-center">
            <button type="submit" name="btn btn-info" class="btn btn-dark m-3" href="/insertMaestro">Guardar</button>
        </form>
        <script type="text/javascript"src="{{URL::asset('validarEntrada.js')}}"></script>
        </div>
    </div>
</div>
</div>
</body>
</html>