
@include('components.head2')
@include('components.nav_bar')


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/img1/umrah.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1>BERSAMA MENGGANDAKAN PAHALA UMRAH 2020</h1>
            <p class="mb-5"><strong class="text-white">Surah Al-Azim</strong></p>
            
          </div>
        </div>
      </div>
      </div>
     
      &nbsp
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
               

                <div class = "float-right">
              
               
              <form class = "form-inline" method = "GET" action = "{{route('cust.search.umrah')}}" enctype="multipart/form-data">
              @csrf
              <input type = "text" name = "keyword" class = "form-control">
              <button type = "submit" class = "btn btn-success">Search</button>
              </form>
             
              </div>
   
                <div class="card-body">
                    
                <table class = "table table-striped">
                <thead>
                
                <tr>

                   
                    <th>agency</th>
                    <th>package</th>
                    <th>price</th>
                    <th>flight</th>
                    
                    
                
                    </tr>
                    
                </thead>
                
                <tbody>
                  
                @foreach($umrahs as $umrah)
                <tr>

                   
                    <td>{{ $umrah->agency }}</td>
                    <td>{{ $umrah->package }}</td>
                    <td>RM{{ $umrah->price }}</td>
                    <td>{{ $umrah->flight }}</td>

                    <td>
                    <a class = "btn btn-primary btn-rounded btn-sm my-0"
                              href ="{{ route('show.umrah', $umrah->id) }}">PILIH<a/> 

                    </td>


                </tr>

                

                @endforeach
                </tbody>
                </table>
<!--
                <div class="container">
                @foreach($umrahs as $umrah)
        <div class="row large-gutters">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="property-single.html" class="d-inline-block mb-4"><img src="images/property_1.jpg" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>HD17 19 Utica Ave.</h3>
                  <p>New York - USA</p>
                  <strong>$20,000,000</strong>
                </div>
  
              </div> 
            </div>
          </div>
          </div>
          @endforeach
          -->
   
              </div>
            </div>
            </div>
            </div>
            </div>

<!--
            
            @foreach($umrahs as $umrah)

            <div class="card-deck">    
      <div class="container">
        <div class="row large-gutters">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="property-single.html" class="d-inline-block mb-4"><img src="images/img1/property_1.jpg" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>HD17 19 Utica Ave.</h3>
                  <p>New York - USA</p>
                  <strong>$20,000,000</strong>
                </div>
  
              </div> 
            </div>
          </div>
          </div>
          </div>
          </div>
          @endforeach
          -->
          


            
            
    
    

    



      @include('components.footer')