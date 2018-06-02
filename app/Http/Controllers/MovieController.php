<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Director;
use App\Country;
use App\Gender;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->paginate(20);
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directors = Director::all();
        $countries = Country::all();
        $genders = Gender::all();
        return view('admin.movies.create', compact('directors', 'countries', 'genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required|string|max:50|unique:movies,name',
            'image' => 'required|image|dimensions:width=400, height=300',
            'description' => 'required|max:700',
            'duration' => 'required|numeric|max:500',
            'launching' => 'required|date',
            'trailer' => 'required|url',
            'size' => 'required|numeric|max:40',
            'format' => ['required', Rule::in(['MP4', 'MKV', 'AVI', 'WMV', 'MOV'])],
            'quality' => ['required', Rule::in(['1080P', '720P'])],
            'urldownload' => 'required|url',
            'director_id' => 'required|exists:directors,id',
            'country_id' => 'required|exists:countries,id',
            'gender_id' => 'required|exists:genders,id'
        ], [
            'image.dimensions' => 'La imagen debe ser 400x300'
        ], [
            'name' => 'Nombre',
            'image' => 'Imagen',
            'description' => 'Descripción',
            'duration' => 'Duración',
            'launching' => 'Fecha de lanzamiento',
            'trailer' => 'Url del Trailer',
            'size' => 'Tamaño',
            'format' => 'Formato de video',
            'quality' => 'Calidad',
            'urldownload' => 'Url de descarga',
            'director_id' => 'Director',
            'country_id' => 'País',
            'gender_id' => 'Género'
        
        ]);


        $movie_slug = str_slug($request->input('name'));
        
        $movie = new Movie;
        $movie->name = $request->input('name');
        $movie->slug = $movie_slug;
        $movie->image = Storage::disk('public')->put('/images/movie',request()->file('image'));
        $movie->description = $request->input('description');
        $movie->duration = $request->input('duration');
        $movie->launching = $request->input('launching');
        $movie->trailer = $request->input('trailer');
        $movie->size = $request->input('size');
        $movie->format = $request->input('format');
        $movie->quality = $request->input('quality');
        $movie->urldownload = $request->input('urldownload');
        $movie->director_id = $request->input('director_id');
        $movie->country_id = $request->input('country_id');
        $movie->gender_id = $request->input('gender_id');
        $movie->save();

        return redirect()->route('movies.index')->with('info', 'La película se ha guardado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
