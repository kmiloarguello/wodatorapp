@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">
    <div class="panel panel-primary ">
        <div class="panel-body">
            <h1 class="hidden">List of exercise</h1>   
        <div >
             <h2 id="thetitle">{{ $category->name }}</h2></div> 

    <ul class="list-group">
    @foreach($category->exercises as $exercise)
        <li class="list-group-item"> 
            <a  href="/exercises/{{ $exercise->id }}" role="button" class="nameexerc"> {{ $exercise->name }}</a>
         <p class="desc"> {{$exercise->description}} </p>
        </li>
    @endforeach
    </ul>
        </div>
    </div>
</div>

@endsection