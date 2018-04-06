@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ elixir('css/wodator.css') }}"> 

<div class="row col-md-9 col-lg-9 col-sm-9 pull-left " >
    <h1>Create  </h1>
      <div class="row  col-md-12 col-lg-12 col-sm-12 " id="marks-row" >
        <form method="post" action="{{ route('marks.store') }}">
          {{ csrf_field() }}
            <h2 id="thetitle">MARKS</h2>
              <div class="form-group">
                 <label for="mark-name">Name<span class="required">*</span></label>
                    <input   placeholder="Enter name"  
                                          id="mark-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control" />
               </div>
                    <div class="form-group">
                    <label for="mark-time">Time</span>
                    </label>
                             <input   placeholder="Enter Time"  
                                          id="mark-timer"
                                          required
                                          name="timer"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>
               <div class="form-group">
                                <label for="mark-content">Description</label>
                                <textarea placeholder="Enter description" 
                                          style="resize: vertical" 
                                          id="mark-content"
                                          name="description"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                </textarea>
              </div>


                           
                             
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
     </form>
   

      </div>
</div>




    @endsection