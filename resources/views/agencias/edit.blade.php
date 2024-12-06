@extends('layout')

@section('main')
<div class="p-4">
    <h1 class="text-3xl font-bold">Editar Agencia</h1>
    <form action="{{ route('agencias.update', $agencia->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        {{-- Campo Nombre --}}
        <div class="mb-3 flex flex-col">
            <label for="name" class="form-label">Nombre</label>
            <input 
			class="h-10 p-2 border border-gray-300 rounded-md"
                type="text" 
                class="form-control" 
                id="name" 
                name="name" 
                value="{{ old('name', $agencia->name) }}" 
                required>
        </div>

        {{-- Campo NIT --}}
        <div class="mb-3 flex flex-col">
            <label for="nit" class="form-label">NIT</label>
            <input 
			class="h-10 p-2 border border-gray-300 rounded-md"
                type="number" 
                class="form-control" 
                id="nit" 
                name="nit" 
                value="{{ old('nit', $agencia->nit) }}" 
                required>
        </div>

        {{-- Campo Tipo --}}
        <div class="mb-3 flex flex-col">
            <label for="type" class="form-label">Tipo</label>
            <select class="h-10 p-2 border border-gray-300 rounded-md"id="type" name="type" required>
                <option value="Principal" {{ $agencia->type == 'Principal' ? 'selected' : '' }}>Principal</option>
                <option value="Sucursal" {{ $agencia->type == 'Sucursal' ? 'selected' : '' }}>Sucursal</option>
            </select>
        </div>

        {{-- Botón de Guardar --}}
        <button type="submit" class="px-6 py-2 rounded-lg shadow hover:bg-blue-600 bg-blue-900 text-white">Guardar Cambios</button>

        {{-- Botón de Cancelar --}}
        <a href="{{ route('agencias.index') }}" class="px-6 py-2 rounded-lg shadow hover:!bg-red-500 bg-red-700 text-white">Cancelar</a>
    </form>
</div>
@endsection
