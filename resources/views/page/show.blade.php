@extends('page.layouts.admin')
@section('content')
            <article class="single">
              <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                        @include('partials.errors')
                        @include('partials.message')
                        <h3><a href="#">{{ $movie->name }}</a></h3>
                    </div>
                    <iframe width="560" height="315" src="{{ $movie->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                  <div class="meta-post">
                    <ul>
                      <li><i class="icon-file"></i></li>
                      <li>By <a href="#" class="author">Admin</a></li>
                      <li>On <a href="#" class="date">10 Jun, 2013</a></li>
                      <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                    </ul>
                  </div>
                  <p align="justify">
                      {{ $movie->description }}
                  </p>

                  <div class="row">
                      <div class="span4">
                          <strong>Género:</strong> {{ $movie->gender->name }} <br>
                          <strong>Dirigido por:</strong> {{ $movie->director->name }} <br>
                          <strong>Calidad:</strong> {{ $movie->quality }} <br>
                          <strong>Duración:</strong> {{ $movie->duration }} minutos
                        </div>
                        <div class="span4">
                            <strong>País:</strong> {{ $movie->country->name }} <br>
                            <strong>Lanzamiento:</strong> {{ $movie->launching }} <br>
                            <strong>Formato:</strong> {{ $movie->format }} <br>
                        </div>
                  </div>


                </div>
              </div>
            </article>

            <!-- author info -->
            <div class="about-author">
              <h5><strong><a href="#">Descargas</a></strong></h5>
              <p align="justify">
                  <center><a href="{{ $movie->urldownload }}" target="_blank" class="btn btn-medium btn-danger"><i class="icon-cloud-download"></i> Descargar</a><br>
                  <strong>Tamaño:</strong> {{ $movie->size }} GB <br>
                  *Si tienes problemas para descargar mira este <a href="#" class="btn btn-mini btn-primary">Tutorial</a>* </center>
              </p>
            </div>

            <div class="comment-area">

              <h4>{{ $movie->comments->count() }} Comentarios</h4>
              @foreach($movie->comments as $comment)
                <div class="media">
                  <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle"></a>
                  <div class="media-body">
                    <div class="media-content">
                      <h6><span>{{ $comment->created_at->diffForHumans() }}</span> {{ $comment->name }}</h6>
                      <p>
                        {{ $comment->body }}
                      </p>
                    </div>
                  </div>
                </div>
              @endforeach
              <div class="marginbot30"></div>
              <h4>Deja un comentario</h4>
              
            <form id="abajo" id="commentform" action="{{ route('comments.store') }}" method="post" name="comment-form">
             
              @csrf
                <div class="row">
                  <input type="hidden" name="slug" value="{{ $movie->slug }}">
                  <div class="span8 margintop10">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="*Ingresa tu nombre">
                  </div>
                  <div class="span8 margintop10">
                    <p>
                    <textarea name="body" rows="12" class="input-block-level" placeholder="*Escribe tu comentario aquí">{{ old('body') }}</textarea>
                    </p>
                    <p>
                      <button class="btn btn-theme btn-medium margintop10" type="submit">Publicar comentario</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>

@endsection