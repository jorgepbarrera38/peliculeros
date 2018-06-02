@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                <h4>Listado de películas <a href="{{ route('movies.create') }}" class="btn btn-primary float-right btn-sm m-b-10 m-l-5">Nuevo</a></h4>
                    
                </div>
                <div class="card-body">
                    @include('partials.message')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Tamaño</th>
                                    <th>Formato</th>
                                    <th>Género</th>
                                    <th>Url descarga</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($movies as $movie)
                                <tr>
                                    <td>{{ $movie->name }}</td>
                                    <td>{{ $movie->slug }}</td>
                                    <td>{{ $movie->size }}</td>
                                    <td>{{ $movie->format }}</td>
                                    <td>{{ $movie->gender->name }}</td>
                                    <td>{{ $movie->urldownload }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm m-b-10 m-l-5">Editar</button>
                                        <button type="button" onclick="getElementById('deletemovie-{{ $movie->id }}').submit()" class="btn btn-danger btn-sm m-b-10 m-l-5">Eliminar</button>
                                    </td>
                                </tr>
                                <form style="display: none" id="deletemovie-{{ $movie->id }}" action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('delete') }}
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $movies->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection