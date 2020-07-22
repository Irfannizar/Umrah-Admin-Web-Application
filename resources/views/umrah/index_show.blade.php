

      

     
@include('components.head2')
@include('components.head1')

     
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">Display Details</div>

                <div class="card-body">
                    
                   
                    <form >
                    
                        ID 
                        <input name="id" type="text"
                        class="form-control"
                        value="{{ $umrah->id }}"
                        readonly>
                        Agency
                        <input name="agency" type="text"
                        class="form-control"
                        value="{{ $umrah->agency }}"
                        readonly>
                        Package 
                        <input name="package" type="text"
                        class="form-control"
                        value="{{ $umrah->package }}"
                        readonly>
                        Price 
                        <input name="price" type="text"
                        class="form-control"
                        value="{{ $umrah->price }}"
                        readonly>
                        Flight 
                        <input name=flight type="text"
                        class="form-control"
                        value="{{ $umrah->flight }}"
                        readonly>
                        &nbsp

                        <div class = "row justify-content-center">
                        <a class = "btn aqua-gradient btn-rounded btn-sm my-0"
                              href ="{{ route('cust.payment', $umrah->id) }}">PAYMENT<a/> 
                              </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.footer')
