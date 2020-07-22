@extends('layouts.app')
@include('components.head')
@section('content')
@include('components.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">Index</div>

                <div class = "float-right">
              
               
              <form class = "form-inline" method = "GET" action = "{{route('cust.search.umrah')}}" enctype="multipart/form-data">
              @csrf
              <input type = "text" name = "keyword" class = "form-control">
              <button type = "submit" class = "btn aqua-gradient">Search</button>
              </form>
             
          </div>
   
                <div class="card-body">
                    
                <table class = "table table-striped">
                <thead>
                <tr>

                    <th>id</th>
                    <th>agency</th>
                    <th>package</th>
                    <th>price</th>
                    <th>flight</th>
                    <th>Task</th>
                    
                
                    </tr>
                </thead>
                
                <tbody>
                  
                @foreach($umrahs as $umrah)
                <tr>

                    <td>{{ $umrah->id }}</td>
                    <td>{{ $umrah->agency }}</td>
                    <td>{{ $umrah->package }}</td>
                    <td>{{ $umrah->price }}</td>
                    <td>{{ $umrah->flight }}</td>

                    <td>
                    <a class = "btn aqua-gradient btn-rounded btn-sm my-0"
                              href ="{{ route('cust.show.umrah', $umrah->id) }}">DETAILS<a/> 

                    </td>


                </tr>

                @endforeach
                </tbody>
                </table>


                   
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>



    
    
      
        <div class = "container">
            <div class="card text-center">
                <div class="card-header">UMRAH</div>
            </div>
        </div>
          
    @foreach($umrahs as $umrah)
    
   <div class="col-sm-6">

  
    <div class="card card-cascade narrower mb-4" style="margin-top: 28px">

     
      <div class="view view-cascade">
        <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="card-img-top"
          alt="">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
     

    
      <div class="card-body card-body-cascade">
        <h5 class="pink-text"><i class="fas fa-utensils"></i> Culinary</h5>
      
        
          <div class="text-center">
        <a class="btn aqua-gradient">Button</a>
          </div>
      </div>
      
    </div>
   

  
  
  </div>

    
    

    @endforeach
    
            
 
@endsection
@include('components.script') 
