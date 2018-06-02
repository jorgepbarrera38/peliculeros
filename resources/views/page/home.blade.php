@extends('page.layouts.admin')
@section('content')
<div class="span12">
<div class="row">
    
    
  <div class="navbar navbar-static-top">
    <div class="navigation">
      <nav>
        <ul class="nav topnav bold">
          <li>
            <form action="" method="GET">
              <div class="form-group">
                
                <input type="text" name="movie" value="{{ request('movie') }}" class="form-control" placeholder="Escribe y presiona enter">
              </div>
            </form>
            
            </li>
            <li class="dropdown">
              <a style="cursor:pointer"><i class="icon-pushpin"></i> Géneros <i class="icon-angle-down"></i></a>
              <ul class="dropdown-menu bold" style="display: none;">
                @foreach($genders as $gender)
                  <li><a style="cursor:pointer" onclick="getElementById('gender-{{ $gender->id }}').submit()">{{ $gender->name }}</a></li>
                  <form action="" method="GET" id="gender-{{ $gender->id }}" style="display:none">
                    <input type="text" name="gender" value="{{ $gender->slug }}">
                  </form>
                @endforeach
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <!-- end navigation -->
    </div>

  <div class="clearfix"></div>
  <div class="row">
    <section id="team">
      <ul id="thumbs" class="team">

        @foreach($movies as $movie)
        <!-- Item Project and Filter Name -->
      <li class="item-thumbs span2 design" data-id="id-0" data-type="design" onclick="location.href='{{ route('home.show', $movie->slug) }}'">   
          <div class="caja"><a href="{{ route('home.show', $movie->slug) }}">
                <img src="{{asset($movie->image)}}" alt="" />
              <span class="info">{{ $movie->name }}</span>
            </a>
          </div>
           
      </li>
        <!-- End Item Project -->
        @endforeach
          

      </ul>
    </section>

  </div>
  <center>{{ $movies->appends(['movie'=>request('movie'), 'gender'=>request('gender')])->links('pagination.default') }}</center>
</div>
</div>
@endsection