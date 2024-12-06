@extends('layout')
@section('main')
<div class="shadow mx-auto bg-white md:w-2/3 p-3">
    <h3 class="text-blue-700 text-xl font-semibold" >Prueba Técnica Laravel </h3>
    <div>
      <ul class="list list-disc list-inside">
        <li>Realize un Fork de este Repositorio</li>
        <li>Complete la Vista Para la Visualización de datos </li>
        <li>Cree 10 registros de Agencias entre principales y sucursales </li>
        <li>Realice un formulario para la Edición de datos</li>
        <li>Cambie la URL de <b> agencia a prospecto y agréguela en la barra de navegación</b></li>
      </ul>
    </div>

    <div>
      Recomendaciones: 
      <ul class="list list-disc list-inside">
        <li>Nombre la base de datos con el Siguente formato: nombre_apellido</li>
        <li>Encontrará varios errores en el proceso, los que deberá solucionar para continuar con el ejercicio</li>
        <li>Dispone de Tailwind CSS, si necesita otro Framework de procesado CSS puede incluirlo</li>
      </ul>
    </div>

    <a class="my-5 text-blue-500 pointer-hand" href="{{ route('agencias.index') }}">
      Visualizacion de Agencias
    <a>
</div>
@endsection