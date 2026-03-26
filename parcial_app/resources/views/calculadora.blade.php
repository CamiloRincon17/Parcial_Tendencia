@extends('layouts.app')

@section('title', 'Calculadora')

@section('content')
    <h1>Operaciones Matemáticas</h1>

    <form method="POST" action="{{ url('/calculadora') }}">
        @csrf

        <div class="form-group">
            <label for="numero1">Número 1:</label>
            <input type="number" step="any" id="numero1" name="numero1"
                   value="{{ old('numero1', $num1 ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="numero2">Número 2:</label>
            <input type="number" step="any" id="numero2" name="numero2"
                   value="{{ old('numero2', $num2 ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion">
                <option value="Suma"           {{ (isset($operacion) && $operacion == 'Suma')           ? 'selected' : '' }}>Suma</option>
                <option value="Resta"          {{ (isset($operacion) && $operacion == 'Resta')          ? 'selected' : '' }}>Resta</option>
                <option value="Multiplicación" {{ (isset($operacion) && $operacion == 'Multiplicación') ? 'selected' : '' }}>Multiplicación</option>
                <option value="División"       {{ (isset($operacion) && $operacion == 'División')       ? 'selected' : '' }}>División</option>
            </select>
        </div>

        <button type="submit" class="btn">Calcular</button>
    </form>

    @isset($resultado)
        <div class="resultado">
            <strong>Resultado:</strong> {{ $num1 }} {{ $operacion }} {{ $num2 }} = {{ $resultado }}
        </div>
    @endisset
@endsection
