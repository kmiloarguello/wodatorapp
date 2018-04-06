@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 
 <meta name="csrf-token" content="{{ csrf_token() }}">

         <script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<div>
    
</div>

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">



    <div class="panel panel-primary ">
        <h2 id="thetitle">CROSSFIT DICTIONARY</h2></div> 
        <div class="wrapper">

      <form id="form">
          <input class="input"  type="text" name="busqueda" id="busqueda" class="form-control pull-left" placeholder="Search Terms...">

         
      </form>
  </div>
    
    <div class="panel-body">
    <h1 class="hidden">List of Categories </h1>   
    <div >
        

    <ul class="list-group">
    @foreach($tips as $tip)
        <li class="list-group-item" id="info"> 

        
       

         <h3>  {{ $tip->name }}</h3>
         <p >  {{ $tip->description }}</p>
         

        </li>
    @endforeach
    </ul>


    </div>
    </div>
</div>

<h1 class="hidden">The search </h1>  

<script type ="text/javascript">
    $(document).ready(function()
    {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#form').on('input',function(e)
        {
            e.preventDefault();
            info = $(this).serialize();
            $.post('/getBusqueda', info, function(busqueda)
            {
                $('#info').html('');
                $.each(busqueda, function (key,info){
                    $('#info').append(''+
                    '<li class="list-group-item" id="info"  > <h3> '+info.name+'</h3></li>'+'<p>'+info.description+'</p>' +'');

                });

            });
        });
    });
    
</script>


@endsection