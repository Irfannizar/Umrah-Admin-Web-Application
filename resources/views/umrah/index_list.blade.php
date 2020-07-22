
@include('components.head')

  &nbsp
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

            @include('components.script')
            @include('components.footer')



