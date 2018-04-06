@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 
<div>
    
</div>

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">

    <div class="panel panel-primary ">
    
    <div class="panel-body">
    <h1 class="hidden">List of Favorites </h1>   
    <div >
        <h2 id="thetitle">My Favorites</h2></div> 

    <ul class="list-group">
    @foreach($favorites as $favorite)
        <li class="list-group-item"> 

        
        <a id="name" href="/exercises/{{ $favorite->id }}" >  {{ $favorite->name }}</a>
        
        <div id="favorites">
        <favorite
        :exercise={{ $favorite->id }}
        :favorited={{ $favorite->favorited() ? 'true' : 'false' }}>
            
        </favorite>
        </div>

        
        <p>{{ $favorite->description }}</p>


         

        </li>
    @endforeach
    </ul>
    

    </div>
    </div>
</div>

@endsection