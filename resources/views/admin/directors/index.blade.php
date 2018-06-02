@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-title">
                <h4>Listado de directores <a href="{{ route('directors.create') }}" class="btn btn-primary float-right btn-sm m-b-10 m-l-5">Nuevo</a></h4>
                    
                </div>
                <div class="card-body">
                    @include('partials.message')
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($directors as $director)
                                <tr>
                                    <td>{{ $director->name }}</td>
                                    <td>{{ $director->slug }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm m-b-10 m-l-5">Editar</button>
                                        <button type="button" onclick="getElementById('deletedirector-{{ $director->id }}').submit()" class="btn btn-danger btn-sm m-b-10 m-l-5">Eliminar</button>
                                    </td>
                                </tr>
                                <form style="display: none" id="deletedirector-{{ $director->id }}" action="{{ route('directors.destroy', $director->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('delete') }}
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $directors->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection