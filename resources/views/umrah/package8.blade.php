@include('components.head1')
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

     

    
    
    <div class="site-section" id="property-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
           
          
          
            <div class="mb-5">
              <h3 class="text-black mb-4">{{ $umrah->agency }}</h3>
              <p>RM{{ $umrah->price }}</p>
              
              <p>Mekah : Hotel Safwa Tower / Hotel Millenium @ setaraf (50 meter, 5 Bintang)</p>
              <p>Madinah : Hotel Jauharat Al Rasheed @ setaraf (150 meter)</p>
              <p>Mekah : Tidak disediakan Makan (bwh Hotel byk pilihan Restoran, Felda D’Saji pun ada)</p>
              <p>Madinah : 3 x sehari</p>
              <p>Dibimbing oleh 2 orang Mutawif terlatih, mesra dan berpengalaman dari Malaysia</p>
              <p>3 x Umrah dibimbing penuh Mutawif</p>
              <p>3 x Ziarah Mekah dan Madinah</p>
              <p>PERCUMA Beg Bagasi 24", Beg Silang, Beg Kasut, Beg Telekung</p>
              <p>PERCUMA Ziarah Taif</p>
              <p>PERCUMA Makan Nasi Arab Special Taif</p>
              <p>PERCUMA Tag Beg, Name Tag, Buku Modul Umrah</p>
              <p>PERCUMA Air Zam Zam 5 Liter</p>
              <p>PERCUMA Insuran Perjalanan</p>
              <p>PERCUMA Wakaf Pendidikan UTM</p>
              <p class="mb-4">Neque facilis iure earum, placeat odit ipsum, amet, optio accusantium voluptatem quasi obcaecati fugit? Explicabo eius dolorem provident quis non voluptas, dignissimos tempora eligendi, in, nam velit, quasi tenetur. Animi!</p>
              <p>{{ $umrah->flight }}</p>

              <select class="mdb-select md-form">
  <option value="" disabled selected>Tarikh Available</option>
  <option value="1">18 hingga 28 Feb 2019</option>
  <option value="2">28 Feb hingga 10 Mac 2019</option>
  <option value="4">10 hingga 20 Mac 2019</option>
  <option value="5">22 Mac hingga 1 April 2019 : Cuti Sekolah RM6,599.00</option>
  <option value="6">30 Mac hingga 9 April 2019</option>
  <option value="7">9 hingga 19 April 2019</option>
  <option value="8">19 hingga 29 April 2019</option>
</select>

              <p><a href="{{ route('cust.payment', $umrah->id) }}" class="btn btn-primary">BAYAR</a></p>
            </div>

            

          </div>
        </div>
      </div>
    </div>

    
   
    
 
@include('components.footer')
