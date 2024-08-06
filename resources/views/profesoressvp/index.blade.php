@extends('layout/template')

@section('title', 'lista | estudiante ')

@section ('contenido')

<main>
    <div class="container py-25 my-25">
        <h2>Lista de Estudiantes</h2>
        <a href="{{url('profesores/create') }}" class="btn btn-primary btn-sm">Nuevo Registro </a>

        <div>
            <form action="{{route('profesores.index')}}" method="get">
                <div class="d-flex justify-content-end filter-container col-md-25">
                    <button class="btn btn-dark" type="submit">Buscar</button>
                    <input type="search" name="buscarpor" placeholder="Esquibe aqui" value=" {{old('buscarpor', $buscarpor)}}">
                </div>
            </form>

            <table class="table text-center table-hover py-15">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th colspan="4">Opciones</th>
                        <td></td>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($alumnosmodel as $key=> $alumnosmodels)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $alumnosmodels->name}}</td>
                        <td>{{ $alumnosmodels->lastname}}</td>
                        <td> <a href="{{ url('profesores/' . $alumnosmodels->id . '/edit') }}" class="btn btn-dark">Editar</a></td>
                        <td>
                        <td>
                            <form action="{{ url('profesores/'.$alumnosmodels->id) }}" method="post">
                                @method("DELETE")
                                @csrf

                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm ('esta seguro que desea eliminar?')">Eliminar</button>

                            </form>

                    </tr>


                    @endforeach

                </tbody>

            </table>


           <div class="d-flex justify-content-center">
              {{$alumnosmodel->links()}}
            </div>

        </div>



        <style>
            body {

                background: #24C6DC;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #514A9D, #24C6DC);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #514A9D, #24C6DC);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
        </style>


        </body>


    </div>
</main>