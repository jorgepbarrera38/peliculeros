@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-title">
                <h4>Listado de Países <a href="{{ route('countries.create') }}" class="btn btn-primary float-right btn-sm m-b-10 m-l-5">Nuevo</a></h4>
                    
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
                                @foreach($countries as $country)
                                <tr>
                                    <td>{{ $country->name }}</td>
                                    <td>{{ $country->slug }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm m-b-10 m-l-5">Editar</button>
                                        <button type="button" onclick="getElementById('deletecountry-{{ $country->id }}').submit()" class="btn btn-danger btn-sm m-b-10 m-l-5">Eliminar</button>
                                    </td>
                                </tr>
                                <form style="display: none" id="deletecountry-{{ $country->id }}" action="{{ route('countries.destroy', $country->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('delete') }}
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $countries->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection