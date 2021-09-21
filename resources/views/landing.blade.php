@extends('public-layouts.app')

<style>
    .welcome-container {
        height: 700px;
        background-image: url('{{ asset('storage/yakinbakes.png')}}');"
        background-position: right center;
        background-repeat: no-repeat;
    }

    .font {
        font-family: 'Poppins', sans-serif;
    }

    /* .bold {
        font-weight: 900;
    } */
    
</style>


@section('content-public')
<div class="container-fluid text-center">    
    <div class="row welcome-container content justify-content-center align-items-center" >
      <div class="col-sm-8 text-left py-5 my-5 font"> 
        <h3 class="mb-2" style="color: #212121;">Welcome to</h3>
        <h1 class="mb-5" style="color: #AF275F;">yakinbakes</h1>
        <button class="btn rounded-btn px-5" style="color: #414141;background-color: #E88BB1; font-family: poppins; font-weight: bold;">Coming Soon</button>
      </div>
    </div>
    <div class="row flex-column justify-content-center m-0 mt-5">
        <div class="row flex-column justify-content-center">
            <h1 style="color: #AF275F; font-family: poppins; font-weight: bold;">New Stuff Here!</h1>
            <div class="dropdown">
                <button class="btn dropdown-toggle rounded-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #E88BB1; color: #212121;">
                  Select
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">12</a>
                  <a class="dropdown-item" href="#">13</a>
                  <a class="dropdown-item" href="#">14</a>
                </div>
              </div>
        </div>
        <div class="row justify-content-center font mt-5">
        </div>
    </div>
  </div>
@endsection
