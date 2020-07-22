
<!DOCTYPE html>
<html lang="en">
@include('components.head2')
@include('components.nav_bar')

    
   
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/img1/umrah.jpg);" data-aos="fade" id="home-section">


        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">PAKEJ UMRAH E-JAWLAH 2020</h1>
              <p class="mb-5 text-shadow">Nikmati pakej umrah yang terbaik dari perkhidmatan kami. Pelbagai harga yang berpatutan </p>
              
              
            </div>
          </div>
        </div>
      </div>  
      </div>  
    </div>   
      


    
    
    <section class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">SYARIKAT PENERBANGAN</h2>
            <p class="lead">Senarai syarikat penerbangan yang disediakan oleh E-JAWLAH : Malindo Air, Air Asia, Hariyani Airways</p>
            </div>
            
            
          <div class="col-md-6 text-left">
          <form action="{{route('cust.search.umrah')}}" enctype="multipart/form-data" method="GET" >
          @csrf
          <div class="input-group mb-3">
          <select  class = "form-control" name ="keyword" >
          <option value="" disabled selected>Pilih Di Sini</option>
          <option value="Malindo Air">Malindo Air</option>
          <option value="Air Asia">Air Asia</option>
          <option value="Hariani Airways">Hariani Airways</option>
          </select>
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="submit" >Cari</button>
                </div>
              </div>
            </form>  
        </div>

        </div>
      </div>
    </section>

  

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">KELEBIHAN E-JAWLAH</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              
              <h3 class="text-black">PENGHAYATAN UMRAH</h3>
              <p class="text-black">Modul fokus penghayatan.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              
              <h3 class="text-dark">LAYANAN DARI HATI</h3>
              <p class="text-black">Mutawif yang berpengalaman.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              
              <h3 class="text-dark">BERLESEN & DIPERCAYAI</h3>
              <p class="text-black">Pengiktirafan dari SME Corp Malaysia.</p>
            </div>
          </div>
        </div>
      </div>  
    </section>



    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="">
                  <div><img src="images/img3/pro2.jpg" alt="Image" class="img-fluid"></div>
                  
                </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">Annaufal Travel Package</h2>
                <p class="lead">RM6690.00</p>
                <p>Pakej Sumayyah juga satu-satunya pakej promosi yang pernah memenangi anugerah berprestij kerana mendapat sambutan yang bagus oleh pelanggan.
                  Pelbagai kemudahan yang disediakan sepanjang tempah umrah dilaksanakan</p>

                <ul class="list-unstyled ul-check success">
                  <li>Harga yang tertera dalam jadual adalah harga terkini</li>
                  <li>Visa umrah bergantung kepada kelulusan pihak Kementerian Arab Saudi</li>
                  <li>Perubahan harga pakej, tempat penginapan, jadual perjalanan dan tarikh penerbangan bergantung kepada perubahan dari masa ke semasa </li>
                  
                </ul>

                <p><a href="/umrah/8" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
        </div>
      </div>
    </section>

    

    <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">SERVIS KAMI</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>MUDAH</h3>
                <p>Mmebantu pelanggan mencari pakej yang diidamkan</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
              <div>
                <h3>MURAH</h3>
                <p>Harga pakej yang berpatutan dan mampu ansuran</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
              <div>
                <h3>SELESA</h3>
                <p>Dijamin selesa dan selamat semasa umrah dijalankan</p>
                
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>

    

    @include('components.footer')
    
    
  </body>
</html>