@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">
    <div class="panel panel-primary ">
     <div class="col-lg-6 col-lg-offset-3">
        <div class="wrapper">
                <form id="form">
                    <input class="input"  type="text" name="search" id="search" class="form-control pull-left" placeholder="Search Exercise...">
                </form>
        </div>
    </div>
   
        <div class="panel-body-exercises">
             <h1 class="hidden">List of Exercise </h1>  
                <ul class="list-group">
                    @foreach($exercises as $exercise)
                        <li class="list-group-item" id="data"> 
                        <a id="name" href="/exercises/{{ $exercise->id }}" >  {{ $exercise->name}}</a></li>
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
            data = $(this).serialize();
            $.post('/getSearch', data, function(search)
            {
                $('#data').html('');
                $.each(search, function (key,data){
                    $('#data').append(''+
                    '<li class="list-group-item" id="data"> <a id="name" href="/exercises/{{ $exercise->id }}" >'+data.name+'</a></li>'+  '');

                });

            });
        });
    });
    
</script>



@endsection