

@extends('layout/template')

@section('title', 'Registrar Estudiante | estudiante ')

@section ('contenido')


<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <link rel="stylesheet" href="{{asset ('interfaz.css') }}">

        
        <a href="{{url('profesores')}}" class="btn btn-secondary">Regresar</a>

        <div>
            <main>
                <div>

                </div>
            </main>
