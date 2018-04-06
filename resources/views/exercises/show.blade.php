@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 

<div class="row col-md-9 col-lg-9 col-sm-9  ">
  <h1 class="hidden">Exercise </h1>  
    <div class="show" >
       <h1>{{ $exercise->name }}</h1>
          <div id="favorites">
            <favorite
            :exercise={{ $exercise->id }}
            :favorited={{ $exercise->favorited() ? 'true' : 'false' }}>
            </favorite>
          </div>
    </div>
  <div class="row  col-md-12 col-lg-12 col-sm-12" >
      <h3 id="time">{{ $exercise->time }}</h3>
        <p class="lead">{{ $exercise->description }}</p>
  </div>

<div class="center-first">
  <a href="/get-random"><input class="button" type="button" value="Shuffle"></a>
    <a href="/exercises/{{ $exercise->id }}/detalle"> <input class="button" type="button" value="Go!"></a>
</div>
</div>
@endsection