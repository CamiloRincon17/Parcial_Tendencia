@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Entrada al parcial de Tendencias Grupo A y C</h1>

    <p class="info-label">Nombre Completo del estudiante:
        <span class="info-value">Adrian Camilo Rincón Ascanio</span>
    </p>

    <p class="info-label">Código:
        <span class="info-value">192531</span>
    </p>

    <a href="{{ url('/calculadora') }}" class="btn">Vista de Calculadora</a>
@endsection