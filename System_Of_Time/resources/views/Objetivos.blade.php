@extends('plant')
@section('cont')

<h1 class="text-center text-dark mt-3">Objetivos de SOT</h1>
<style>
    div.OG{
        width: 700px;
        height: 115px;
        border-radius: 8px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);
        overflow: hidden;
        margin: 20px;
        margin-left: 23%;
        text-align: center;
        transition: all 0.25s;
        border-width: 3px;
        border-color: black;
    }
    div.OE{
        width: 700px;
        height: 460px;
        border-radius: 8px;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.7);
        overflow: hidden;
        margin: 20px;
        margin-left: 23%;
        text-align: left;
        transition: all 0.25s;
        border-width: 3px;
        border-color: black;
    }
</style>
<div class="container">
    <div class="card OG">
        <h4 class="text-center">Objetivos Especificos</h4>
        <p id="p2">•	Crear cargas horarias eficientes.</p>
        <p id="p2">•	Guardar datos importantes para la creación
                        del horario tales como los profesores, grupos,
                        turnos, carrera, materias, numero de materias,
                        tutores, talleres, etc.</p>
        <p id="p2">•	Crear y ajustar mediante los datos de entrada,
                        los horarios según el turno, carrera y nivel
                        que se esté cursando.</p>
        <p id="p2">•	Crear restricciones según el horario y turno
                        de los alumnos con respecto a las materias
                        de desarrollo humano, lenguajes extranjeros
                        y tutoría debido a que en desarrollo humano y
                        tutoría no pueden estar ni al principio de
                        iniciar clases ni terminado clases.
                        En cuanto a lenguajes y autómatas siempre
                        tendrán los mismos días y horas ya
                        establecidas</p>
        <p id="p2">•	Modificar carga actual del horario en caso de
                        una alta y baja de materia o profesor o en
                        cualquier suceso remoto error de codificación,
                        restricción o en posibles casos error de dedo.</p>
        <p id="p2">•	Distribuir la carga horaria a su respectivo
                        grupo, carrera y turno.</p>
        <p id="p2">•	Obtener la carga más eficiente posible.</p>
    </div>
</div>
@stop