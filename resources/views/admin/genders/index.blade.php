@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-title">
                <h4>Listado de géneros <a href="{{ route('genders.create') }}" class="btn btn-primary float-right btn-sm m-b-10 m-l-5">Nuevo</a></h4>
                    
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
                                @foreach($genders as $gender)
                                <tr>
                                    <td>{{ $gender->name }}</td>
                                    <td>{{ $gender->slug }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm m-b-10 m-l-5">Editar</button>
                                        <button type="button" onclick="getElementById('deleteGender-{{ $gender->id }}').submit()" class="btn btn-danger btn-sm m-b-10 m-l-5">Eliminar</button>
                                    </td>
                                </tr>
                                <form style="display: none" id="deleteGender-{{ $gender->id }}" action="{{ route('genders.destroy', $gender->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('delete') }}
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $genders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection