<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Gender;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_buscar = request('movie'); 
        $gender_buscar = request('gender');
        $genders = Gender::orderBy('name')->get();
        $movies_recommendeds = Movie::inRandomOrder()->take(3)->get();
        $movies = Movie::movie($movie_buscar)->whereHas('gender', function($query)use($gender_buscar){
            if ($gender_buscar){
                $query->where('slug', $gender_buscar);
            }
        })->paginate(16);
        return view('page.home',compact('movies', 'genders', 'movies_recommendeds'));
    }

    public function contact(){
        $movies_recommendeds = Movie::inRandomOrder()->take(3)->get();
        $genders = Gender::orderBy('name')->get();
        return view('page.contact', compact('genders', 'movies_recommendeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $movies_recommendeds = Movie::inRandomOrder()->take(3)->get();
        $genders = Gender::orderBy('name')->get();
        $movie = Movie::where('slug', $slug)->first();
        return view('page.show', compact('movie', 'genders', 'movies_recommendeds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
