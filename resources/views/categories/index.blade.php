@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 
<div>
    
</div>

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">

    <div class="panel panel-primary ">
        <div class="panel-body">
            <h1 class="hidden">List of Categories </h1>   
        <div >
            <h2 id="thetitle">WODS</h2></div> 

                <ul class="list-group">
                    @foreach($categories as $category)
                     <li class="list-group-item"> 
                        <a id="name" href="/categories/{{ $category->id }}" >  {{ $category->name }}</a> </li>
                    @endforeach
                </ul>
        </div>
    </div>
</div>

@endsection