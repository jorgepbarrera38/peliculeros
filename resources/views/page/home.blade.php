@extends('page.layouts.admin')
@section('content')

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

@endsection