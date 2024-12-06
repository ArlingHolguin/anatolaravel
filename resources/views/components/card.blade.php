<div class="p-5 shadow rounded hover:font-bold hover:shadow-xl " >
	<section class="bg-blue-700 rounded ">
		<img src="https://dev.anato.org/img/logo-anato-blanco.png" alt="Logo ANATO" class="mx-auto my-auto">
	</section>
	<section>
		<div class=" grid grid-flow-row grid-cols-2">
			{{-- {{ dump($agencia)  }} --}}
			<p>Nombre </p>
			<p>: {{$agencia->name ?? 'Nombre' }}</p>

			<p>NIT </p>
			<p>: {{$agencia->nit ?? 'NIT' }}</p>
			<p>Sucursales</p>
			<p>: {{ is_bool($agencia) ? '# de Sucursales' : $agencia->getChildren->count() }} </p>
			<p>Tipo de Agencia</p>
			<p>: {{$agencia->type ?? 'Tipo' }}</p>

		</div>

	</section>

</div>