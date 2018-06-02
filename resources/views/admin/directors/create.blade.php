@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Nuevo director</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        @include('partials.errors')
                        <form method="POST" action="{{ route('directors.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('directors.index') }}" class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection