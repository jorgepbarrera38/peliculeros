<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'slug' => 'required|string|exists:movies,slug',
            'name' => 'required|string|max:30',
            'body' => 'required|string|max:100'
        ], [
            'slug.required' => 'Ha ocurrido un error', 
            'slug.string' => 'Ha ocurrido un error',
            'slug.exists' => 'Ha ocurrido un error',
            'name.required' => 'Debes escribir tu nombre',
            'name.string' => 'Tu nombre debe ser una cadena de texto',
            'name.max' => 'Tu nombre debe ser máximo de 30 caracteres',
            'body.required' => 'Debes escribir un comentario',
            'body.string' => 'El comentario debe ser una cadena de texto',
            'body.max' => 'El comentario debe ser máximo de 100 caracteres'
        ]);

        $movie_id = Movie::where('slug', $request->input('slug'))->first()->id;
        
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->body = $request->input('body');
        $comment->movie_id = $movie_id;
        $comment->save();

        return redirect()->back()->with('info', 'Tu comentario se publicó correctamente');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
