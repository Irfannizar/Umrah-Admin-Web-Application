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
<header>

            <!--
                <div class="center links">
                    
                        <a href="{{ route('cust.search.umrah')}}">Back</a>
                    
                </div>
                -->

</header>
            

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            &nbsp
                <div class="card-header">Customer Details</div>

                <div class="card-body">
                    
                    <!-- form start -->
                    @auth
                    <form  >
                        Name
                        <input name="name" type="text"
                        class="form-control"
                        value="{{ Auth::user()->name }}"
                        >
                        FullName
                        <input name="fullname" type="text"
                        class="form-control"
                        value="{{ Auth::user()->fullname }}"
                        >
                        Address
                        <input name="address" type="text"
                        class="form-control"
                        value="{{ Auth::user()->address }}"
                        >
                        Email
                        <input name="email" type="text"
                        class="form-control"
                        value="{{ Auth::user()->email }}"
                        >
                        tel
                        <input name="phone" type="text"
                        class="form-control"
                        value="{{ Auth::user()->tel }}"
                        >
          
                    </form>
                    @endauth

                    <!-- form ends -->
                </div>
            </div>
        </div>
    </div>
</div>



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            &nbsp
                <div class="card-header">Package Details</div>

                <div class="card-body">
                    
                    <!-- form start -->
                    <form  action = "{{ route('cust.receipt', $umrah->id) }}" method = "POST" >
                    @csrf
                    <input name="fullname" type="text"
                        class="form-control"
                        value="{{ Auth::user()->fullname }}"
                        hidden>
                        <input name="email" type="text"
                        class="form-control"
                        value="{{ Auth::user()->email }}"
                        hidden>
                    <input name="name" type="text"
                        class="form-control"
                        value="{{ Auth::user()->name }}"
                        hidden>
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
                        <input name="flight" type="text"
                        class="form-control"
                        value="{{ $umrah->flight }}"
                        readonly>

                        Date Booking
                        <input name="date_umrah" type="text"
                        class="form-control"
                        value="{{ $umrah_date }}"
                        readonly>
                        &nbsp
                    
                        <div class = "row justify-content-center">
                    
                             <button type = "submit" class = "btn btn-danger">CHECKOUT</button>
                              </div>
                    </form>

                    <!-- form ends -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@include('components.footer')