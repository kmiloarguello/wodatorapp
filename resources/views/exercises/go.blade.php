@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 
  <div class="row col-md-9 col-lg-9 col-sm-9  ">
      <h1 class="hidden">Exercise </h1>  
        <div class="show" >
           <h1>{{ $exercise->name }}</h1>
                <favorite
                :exercise={{ $exercise->id }}
                :favorited={{ $exercise->favorited() ? 'true' : 'false' }}>
                </favorite>
        </div>


<div class="row  col-md-12 col-lg-12 col-sm-12" >
                <p class="lead">{{ $exercise->description }}</p>
</div>


<div class="rounds">
  <div class="roundstotal" id="total">0</div>
    <div class="rounds-butt">
      <button type="button" data-toggle="collapse"  id="plus" >
        <i class="fa fa-plus fa-5x cruz"  aria-hidden="true"></i>
      </button>
      <button  id="reset">
        <i class="fa fa-refresh fa-5x again" aria-hidden="true"></i>
      </button>
      <button  id="minus">
        <i class="fa fa-minus fa-5x minus" aria-hidden="true"></i>
      </button>
  </div>
</div>



<div class="time">
  <time id="timer">0:00:00</time>
  <button id="toggle">Start</button>
  <button id="clear">Clear</button>
</div>


<div class="center">
  <a href="{{ route('marks.create') }}"><input class="button" type="button" value="Add Score"></a>
</div>

</div>

  <script src="{{ asset('js/stopwatch.js') }}"></script>
    <script src="{{ asset('js/rounds.js') }}"></script>



    @endsection