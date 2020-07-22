
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
             
              <p>Jenis Penerbangan :  {{ $umrah->flight }}</p>

             
              
              <form method = "POST" action = "{{ route('cust.payment', $umrah->id) }}">
              @csrf
              <select  class = "form-control" name ="umrah_date" >
  <option value="" disabled selected>Tarikh Available</option>
  <option value="18 hingga 28 Feb 2019">18 hingga 28 Feb 2020</option>
  <option value="28 Feb hingga 10 Mac 2019">28 Feb hingga 10 Mac 2020</option>
  <option value="10 hingga 20 Mac 2019">10 hingga 20 Mac 2019</option>
  <option value="22 Mac hingga 1 April 2019 : Cuti Sekolah RM6,599.00">22 Mac hingga 1 April 2020 : Cuti Sekolah RM6,599.00</option>
  <option value="30 Mac hingga 9 April 2019">30 Mac hingga 9 April 2020</option>
  <option value="9 hingga 19 April 2019">9 hingga 19 April 2020</option>
  <option value="19 hingga 29 April 2019">19 hingga 29 April 2020</option>
</select>
<br>
          <div>
            <button type = "submit" class = "btn btn-primary">BAYAR</button>
            </div>
            </form>
            </div>

            

          </div>
        </div>
      </div>
    </div>

    
   
    
 
@include('components.footer')
