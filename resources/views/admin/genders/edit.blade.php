@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Listado de géneros <button type="button" class="btn btn-primary float-right btn-sm m-b-10 m-l-5">Nuevo</button></h4>
                    
                </div>
                <div class="card-body">
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
                                @foreach($genders as $gender)
                                <tr>
                                    <td>{{ $gender->name }}</td>
                                    <td>{{ $gender->slug }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm m-b-10 m-l-5">Editar</button>
                                        <button type="button" class="btn btn-danger btn-sm m-b-10 m-l-5">Eliminar</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection