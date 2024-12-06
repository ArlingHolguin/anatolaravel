@extends('layout')

@section('main')
<div class="p-4 bg-blue-500">
    <h1 clas="text-3xl font-bold">Editar Agencia</h1>
    <form action="{{ route('agencias.update', $agencia->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')

        {{-- Campo Nombre --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name" 
                value="{{ old('name', $agencia->name) }}" 
                required>
        </div>

        {{-- Campo NIT --}}
        <div class="mb-3">
            <label for="nit" class="form-label">NIT</label>
            <input 
                type="number" 
                class="form-control" 
                id="nit" 
                name="nit" 
                value="{{ old('nit', $agencia->nit) }}" 
                required>
        </div>

        {{-- Campo Tipo --}}
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" id="type" name="type" required>
                <option value="Principal" {{ $agencia->type == 'Principal' ? 'selected' : '' }}>Principal</option>
                <option value="Sucursal" {{ $agencia->type == 'Sucursal' ? 'selected' : '' }}>Sucursal</option>
            </select>
        </div>

        {{-- Botón de Guardar --}}
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>

        {{-- Botón de Cancelar --}}
        <a href="{{ route('agencias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
