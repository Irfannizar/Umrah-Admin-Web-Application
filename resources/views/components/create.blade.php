@extends('layouts.app')

@include('components.head1')
@section('content')






<!-- Default form register -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
<form class="text-center border border-light p-4" action="{{route('create.umrah')}}" method = "POST">
@csrf

    <p class="h5 mb-5">Create Umrah</p>


    <input type="text" class="form-control mb-4" placeholder="Agency" name = "agency">  

   
    <input type="text" class="form-control mb-4" placeholder="Package" name = "package">

   
    <input type="number"  class="form-control mb-4" placeholder="Price" name = "price">
    
    
    <input type="text"  class="form-control mb-4" placeholder="Flight" name = "flight">
   
   
    
    <button class="btn aqua-gradient my-4 btn-block" type="submit">Create</button>

    
  

    
</form>
  </div>

  @endsection

  @include('components.script')  
