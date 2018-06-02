@extends('page.layouts.admin')
@section('content')

<div class="row">
  <div class="span12">
    
<article class="single">
    <div class="row">

      <div class="span12">
        <div class="post-image">
          <div class="post-heading">
          <h3><a href="#">{{ $movie->name }}</a></h3>
          </div>
           <!-- <img src="img/dummies/blog/img1.jpg" alt="">-->
        <iframe width="560" height="315" src="{{ $movie->trailer }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="meta-post">
          <ul>
            <li><i class="icon-file"></i></li>
            <li>By <a href="#" class="author">Admin</a></li>
          </ul>
        </div>
        <h5>Descripción</h5>
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
        <div class="solidline"></div>
        <p align="justify">
            <center><strong>Tamaño:</strong> {{ $movie->size }} GB <br>
            <a target="_blank" href="{{ $movie->urldownload }}" class="btn btn-medium btn-danger">Descargar</a> <br>
            *Si tienes problemas para descargar mira este <a href="#" class="btn btn-mini btn-primary">Tutorial</a>* </center>
        </p>
        <div class="solidline"></div>
      </div>
    </div>
    
  </article>
  <!-- author info -->
  
  <!--<div class="comment-area">
  
    <h4>4 Comments</h4>
    <div class="media">
      <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle"></a>
      <div class="media-body">
        <div class="media-content">
          <h6><span>March 12, 2013</span> Michael Simpson</h6>
          <p>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </p>

          <a href="#" class="align-right">Reply</a>
        </div>
      </div>
    </div>
    <div class="media">
      <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle"></a>
      <div class="media-body">
        <div class="media-content">
          <h6><span>March 12, 2013</span> Smith karlsen</h6>
          <p>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </p>

          <a href="#" class="align-right">Reply</a>
        </div>
        <div class="media">
          <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle"></a>
          <div class="media-body">
            <div class="media-content">
              <h6><span>June 22, 2013</span> Jay Moeller</h6>
              <p>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </p>

              <a href="#" class="align-right">Reply</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="media">
      <a href="#" class="pull-left"><img src="img/avatar.png" alt="" class="img-circle"></a>
      <div class="media-body">
        <div class="media-content">
          <h6><span>June 24, 2013</span> Dean Zaloza</h6>
          <p>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </p>

          <a href="#" class="align-right">Reply</a>
        </div>
      </div>
    </div>

    <div class="marginbot30"></div>
    <h4>Deja tu comentario</h4>

    <form id="commentform" action="#" method="post" name="comment-form">
      <div class="row">
        <div class="span4">
          <input type="text" placeholder="* Enter your full name">
        </div>
        <div class="span4">
          <input type="text" placeholder="* Enter your email address">
        </div>
        <div class="span8 margintop10">
          <input type="text" placeholder="Enter your website">
        </div>
        <div class="span8 margintop10">
          <p>
            <textarea rows="12" class="input-block-level" placeholder="*Your comment here"></textarea>
          </p>
          <p>
            <button class="btn btn-theme btn-medium margintop10" type="submit">Submit comment</button>
          </p>
        </div>
      </div>
    </form>
  </div>-->
  </div>
</div>



@endsection