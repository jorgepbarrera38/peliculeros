@extends('admin.layouts.main')
@section('content')
<div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Nueva película</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        @include('partials.errors')
                        <form method="POST" action="{{ route('movies.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre de la película">
                            </div>
                            <div class="form-group">
                                <label>Imagen</label>
                                <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Duración</label>
                                <input type="number" name="duration" value="{{ old('duration') }}" class="form-control" placeholder="Duración en minutos">
                            </div>
                            <div class="form-group">
                                <label>Fecha de lanzamiento</label>
                                <input type="date" name="launching" value="{{ old('launching') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Url del trailer</label>
                                <input type="url" name="trailer" value="{{ old('trailer') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tamaño</label>
                                <input type="number" name="size" value="{{ old('size') }}" class="form-control" placeholder="Tamaño en GigaBytes">
                            </div>
                            <div class="form-group">
                                <label>Formato de video</label>
                                <select name="format" class="form-control">
                                    <option value="">Seleccione formato de video</option>
                                    <option value="MP4">MP4</option>
                                    <option value="MKV">MKV</option>
                                    <option value="AVI">AVI</option>
                                    <option value="WMV">WMV</option>
                                    <option value="MOV">MOV</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Calidad</label>
                                <select name="quality" class="form-control">
                                    <option value="">Seleccione calidad</option>
                                    <option value="1080P">1080P</option>
                                    <option value="720P">720P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Url de descarga</label>
                                <input type="url" name="urldownload" value="{{ old('urldownload') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Director</label>
                                <select name="director_id" class="form-control">
                                    <option value="">Seleccione director</option>
                                    @foreach($directors as $director)
                                        <option value="{{ $director->id }}">{{ $director->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>País</label>
                                <select name="country_id" class="form-control">
                                    <option value="">Seleccione país</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Género</label>
                                <select name="gender_id" class="form-control">
                                    <option value="">Seleccione género</option>
                                    @foreach($genders as $gender)
                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('movies.index') }}" class="btn btn-danger">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection