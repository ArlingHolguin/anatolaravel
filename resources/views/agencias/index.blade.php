@extends('layout')
@section('main')
	<div class="p-2">
		Listado de Agencias 
		<div class="grid grid-flow-row grid-cols-1 md:grid-cols-3 xl:grid-cols-5  gap-5">			
			@foreach($agencias as $agencia)
			<a href="{{route('agencias.edit', $agencia)}}" class="bg-white">	
				
				@include('components.card', ['agencia' => $agencia])
			</a>
			@endforeach
		</div>
	</div>
@endsection
