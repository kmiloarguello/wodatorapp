@extends('layouts.app')
<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
<style>
 html, body {
                background-color: #303030;
                background-size: cover ;
                font-family: 'Francois One', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0px;
            }
           @font-face {
  font-family: 'bebasneue';
  src: url("../fonts/bebasneue-webfont.woff2") format("woff2"), url("../fonts/bebasneue-webfont.woff") format("woff");
  font-weight: normal;
  font-style: normal; }
@font-face {
  font-family: 'roboto';
  src: url("../fonts/roboto-webfont.woff2") format("woff2"), url("../fonts/roboto-webfont.woff") format("woff");
  font-weight: normal;
  font-style: normal; }
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  /* make transparent link selection, adjust last value opacity 0 to 1.0 */ }

.name h2 {
  text-align: center;
  font-family: "bebasneue";
  margin: 0px; }

.description h3 {
  text-align: center;
  font-family: "bebasneue";
  margin: 0;
  font-size: 16px; }

body {
  -webkit-touch-callout: none;
  /* prevent callout to copy image, etc when tap to hold */
  -webkit-text-size-adjust: none;
  /* prevent webkit from resizing text to fit */
  -webkit-user-select: none;
  /* prevent copy paste, to allow, change 'none' to 'text' */
  background-color: #25272C;
  font-family: "bebasneue", sans-serif;
  font-size: 20px;
  color: white; }

.container {
  width: 100%; }

.logo {
  margin-bottom: 0;
  margin: 0 36%;
  padding-top: 5px; }

.uno {
  width: 100%;
  height: 110px;
  border-style: solid;
  /*border-width: 2px 10px 4px 20px;*/
  display: inline-block; }
  .uno .titulo {
    display: inline-block;
    margin: 0 27px 0 47px;
    width: 50%; }
    .uno .titulo h2.name {
      text-align: center;
      font-family: "bebasneue";
      margin: 0px;
      font-size: 2.40em;
      margin-top: 20px; }
    .uno .titulo h3.description {
      text-align: center;
      font-size: 1.40em;
      text-align: center;
      font-family: "bebasneue";
      margin: 0; }
  .uno .uno-last {
    width: 100%;
    height: 101px;
    border-bottom-style: solid;
    display: inline-block; }
  .uno .next {
    display: inline-block;
    margin: 0px 6px 8px 16px;
    padding: 24px 14px 16px 26px;
    position: absolute; }

    .panel-body-home {
    margin-top: 90px;
}


        </style>

@section('content')
<div class="container">
    <div class="row">
       <!--  <div class="col-md-8 pull-right">
            <div class="image-heading"> </div>
        </div> -->
        <h1 class="hidden">Welcome </h1>  
        <div class="col-md-12 pull-right">
            <div class=" welcome ">
                
                
                <div class="panel-body-home">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="uno">
              <div class="titulo">
                  <h2 class="name">GO</h2>
                  <h3 class="description"> Wod of the day</h3>
              </div>
              <div class="next">

                <a class="icon-go" href="/get-random"><img id="next" src="images/snext.png"  alt="next"></a>
              </div>
          </div>
          <div class="uno">
            <div class="titulo">
                  <h2 class="name">WODS</h2>
                  <h3 class="description"> Wod world</h3>
              </div>
              <div class="next">
                <a class="icon-go" href="{{ route('exercises.index') }}"><img id="next" src="images/snext.png"  alt="next"></a>
              </div>
              
          </div>
          <div class="uno">
            <div class="titulo">
                  <h2 class="name">My marks</h2>
                  <h3 class="description"> Show your Pr's</h3>
              </div>
              <div class="next">
                <a class="icon-go" href="{{ route('marks.index') }}"><img id="next" src="images/snext.png"  alt="next"></a>
              </div>
              
          </div>
          <div class="uno">
            <div class="titulo">
                  <h2 class="name">Favorites</h2>
                  <h3 class="description"> The ones</h3>
              </div>
              <div class="next">
                <a class="icon-go" href="{{ url('my_favorites') }}"><img id="next" src="images/snext.png"  alt="next"></a>
              </div>
              
          </div>
          <div class="uno">
            <div class="titulo">
                  <h2 class="name">Terms</h2>
                  <h3 class="description"> Every term about CrossFit</h3>
              </div>
              <div class="next">
                <a class="icon-go" href="{{ route('tips.index') }}"><img id="next" src="images/snext.png"  alt="next"></a>
              </div>
              
          </div>  
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
