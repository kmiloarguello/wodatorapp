@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 

     
     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left ">
      
       <div class="show" >
          <h1>{{ $mark->name }}</h1>
            <p class="lead">{{ $mark->time }}</p>
            <p class="lead">{{ $mark->description }}</p>
       </div>
    </div>


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
  <div class="sidebar-module">
    <ol class="list-unstyled">
     <br/>
       <li>
        <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure letting this go?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          class="pull-right btn btn-primary btn-sm" >
                  <i class="fa fa-plus-square" aria-hidden="true"></i>  Delete
              </a>

              <form id="delete-form" action="{{ route('marks.destroy',[$mark->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

 
              
              
              </li>

             
            </ol>
          </div>

         
        </div>


    @endsection