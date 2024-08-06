@extends('layout/template')

@section('title', 'Registrar Estudiante | estudiante ')

@section ('contenido')


<main>
    <div class="container text-center py-4">
            <h2>   Registrar Estudiantes  </h2>
        <link rel="stylesheet" href="{{asset ('interfaz.css') }}">

        @if($errors->any())

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <form action="{{route('profesores.store')}}" method="post">

            @csrf
            <div class="form-container" style="border: 5px solid  #ee9ca7; padding:25px; border-radius: 5px; background-color:  #ffdde1">
            
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="card-5">
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name') }}" required>

                </div>
            </div>


            <div class="mb-3 row">
                <label for="lastname" class="col-sm-2 col-form-label">LastName:</label>
                <div class="card-5">
                    <input type="text" class="form-control" name="lastname" id="lastname" value="{{old('lastname') }}" required>

                </div>

            </div>

            <div class="botones">
                <a href="{{url('profesores') }}" class="btn btn-secondary btn-sm">Regresar</a>


                <button type="submit" class="btn btn-success">Guardar</button>

            </div>

        







            </style>

        </form>

    </div>

</main>