@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 
<div>
    
</div>

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">

    <div class="panel panel-primary ">
    
        <div class="panel-body">
            <h1 class="hidden">List of Marks </h1>   
                <div >
                <h2 id="thetitle">MARKS</h2></div> 
    <ul class="list-group">
    @foreach($marks as $mark)
        <li class="list-group-item"> 
            <a id="name" href="/marks/{{ $mark->id }}" >  {{ $mark->name }}</a>
                <p>{{ $mark->time }}</p>
                <p>{{ $mark->description }}</p>
        </li>
    @endforeach
    </ul>
    
    <a  class="pull-right btn btn-primary btn-sm" href="/marks/create">
    <i class="fa fa-plus-square" aria-hidden="true"></i>  Create new</a>


    </div>
    </div>
</div>

@endsection