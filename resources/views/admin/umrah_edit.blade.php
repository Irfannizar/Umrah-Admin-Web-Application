
@include('components.head1')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            &nbsp
                <div class="card-header">Display Details</div>

                <div class="card-body">
                    
                    
                    <!-- form start -->
                    
                        <form action = " {{ route('admin.update.umrah', $umrah->id) }}" method = "POST">
                        
                        <!--
                        <form action = "{{action('UmrahController@umrah_update', $umrah->id)}}" method="POST">
                        -->
                        {{csrf_field()}}
                        ID 
                        <input name="id" type="text"
                        class="form-control"
                        value="{{ $umrah->id }}"
                        >
                        Agency
                        <input name="agency" type="text"
                        class="form-control"
                        value="{{ $umrah->agency }}"
                        >
                        Package 
                        <input name="package" type="text"
                        class="form-control"
                        value="{{ $umrah->package }}"
                        >
                        Price 
                        <input name="price" type="text"
                        class="form-control"
                        value="{{ $umrah->price }}"
                        >
                        Flight 
                        <input name="flight" type="text"
                        class="form-control"
                        value="{{ $umrah->flight }}"
                        >
                        &nbsp
                        


                            <button type = "submit" class = "btn aqua-gradient">UPDATE</button>


                            <!--
                        <div class = "row justify-content-center">
                        <a class = "btn aqua-gradient btn-rounded btn-sm my-0"
                              href ="{{ route('admin.update.umrah', $umrah->id) }}
                              ">SAVE UPDATE<a/> 
                            -->
                        </form>

                    <!-- form ends -->
                </div>
            </div>
        </div>
    </div>
</div>
