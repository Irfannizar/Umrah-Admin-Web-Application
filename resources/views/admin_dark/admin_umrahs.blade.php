<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
 
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Agency
                        </th>
                        <th>
                          Package
                        </th>
                        <th>
                          Flight
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                      </thead>
                      <tbody>
                      @foreach($umrahs as $umrah)
                        <tr>
                          <td>
                          {{ $umrah->id }}
                          </td>
                          <td>
                          {{ $umrah->agency }}
                          </td>
                          <td>
                          {{ $umrah->package }}
                          </td>
                          <td>
                          {{ $umrah->flight }}
                          </td>
                          <td class="text-primary">
                          RM{{ $umrah->price }}
                          </td>
                          
                    <td>
                        
                          <span class="table-remove">
                          
                          <a class = "btn btn btn-info"
                              href ="{{route('admin.edit.umrah', $umrah->id) }}">UPDATE<a/> 
                            
                              <!-- Button trigger modal -->



                          </span>
                        
                    </td>

                    

                    <td>
                    
                    <span class="table-remove">
                        <form method = "POST" 
                        action = "{{ route('delete.umrah', $umrah->id) }}">
                        @csrf
                            <button class = "btn btn-info" onclick= "return confirm('Are you sure?')">
                            DELETE
                      
                        </button>
                        </form>
                        </span>
                        
                        <!--
                        <span class="table-remove">
                          <a class = "btn btn-info" onclick= "return confirm('Are you sure?')"
                              href ="">DELETE<a/> 
                          </span>
                          -->
                        
                        
                    </td>
                        </tr>
                        @endforeach
                        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
    </div>
  </div>

  
<!-- EndModal -->
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  
 
  
  <script>



    $(document).ready(function() {
      $().ready(function() {

        $('#example').DataTable();

      
        });
      
    });
  </script>
</body>

</html>