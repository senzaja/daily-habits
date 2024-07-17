  <!-- Hero Start -->
  <div class="container-fluid bg-primary hero-header mb-5">
      <div class="container">
          <div class="row g-5 align-items-center">
              <div class="col-lg-8 text-center text-lg-start">
                  <h1 class="display-4 text-white animated slideInRight">Selamat Datang <span class="fw-light text-dark">Di</span> Daily Habits</h1>
                  <p class="text-white mb-4 animated slideInRight">Peningkatan kecil yang dilakukan setiap hari dari waktu ke waktu akan menghasilkan hasil yang menakjubkan.</p>
              </div>
              <div class="col-lg-4">
                  <img class="img-fluid animated pulse infinite" src="{{asset('ass/assets/img/daily.png')}}" alt="" width="380">
              </div>
          </div>
      </div>
  </div>
  <!-- Hero End -->


  <!-- Feature Start -->
  
  <!-- Feature End -->


  <!-- About Start -->
  <div class="container-fluid py-9">
      <div class="container">
          <div class="row g-5 align-items-center">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <center>
                      <img class="img-fluid animated pulse infinite" width="380" src="{{asset('ass/assets/img/tanda.png')}}">
                  </center>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <h1 class="text-primary mb-4">apa itu <span class="fw-light text-dark">daily habits ?
                      </span></h1>
                  <p class="mb-4">Daily habits adalah kebiasaan atau aktivitas yang dilakukan secara rutin setiap hari. Kebiasaan ini biasanya menjadi bagian dari rutinitas harian seseorang dan dapat mempengaruhi berbagai aspek kehidupan, termasuk kesehatan, produktivitas, dan kesejahteraan mental.</p>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->


  <!-- Deal Start -->

  <!-- Deal End -->


  <!-- Feature Start -->
  <div class="container-fluid py-5 mt-5 " >
      <div class="container">
          <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="text-primary mb-3"><span class="fw-light text-dark">Kegunaan</span> Daily Habits
                  </h1>
          </div>
          <div class="row g-4 align-items-center">
              <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="row g-5">
                      <div class="col-12 d-flex">
                          <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                              <i class="fa fa-check fa-2x text-primary"></i>
                          </div>
                          <div class="ps-3">
                              <h5>Manajemen Waktu</h5>
                              <hr class="w-25 bg-primary my-2">
                          </div>
                      </div>
                      <div class="col-12 d-flex">
                          <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                              <i class="fa fa-check fa-2x text-primary"></i>
                          </div>
                          <div class="ps-3">
                              <h5> Mengurangi Stres</h5>
                              <hr class="w-25 bg-primary my-2">
                          </div>
                      </div>
                      <div class="col-12 d-flex">
                          <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                              <i class="fa fa-check fa-2x text-primary"></i>
                          </div>
                          <div class="ps-3">
                              <h5>Menigkatkan Kualitas Tidur</h5>
                              <hr class="w-25 bg-primary my-2">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <center>
                  <img class="img-fluid animated pulse infinite" src="{{asset('ass/assets/img/jam.png')}}">
                  </center>
              </div>
              <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                  <div class="row g-5">
                      <div class="col-12 d-flex">
                          <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                              <i class="fa fa-check fa-2x text-primary"></i>
                          </div>
                          <div class="ps-3">
                              <h5>Meningkatkan Kesehatan Fisik dan Mental</h5>
                              <hr class="w-25 bg-primary my-2">
                          </div>
                      </div>
                      <div class="col-12 d-flex">
                          <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                              <i class="fa fa-check fa-2x text-primary"></i>
                          </div>
                          <div class="ps-3">
                              <h5>Pengembangan Diri</h5>
                              <hr class="w-25 bg-primary my-2">
                          </div>
                      </div>
                      <div class="col-12 d-flex">
                          <div class="btn-square rounded-circle border flex-shrink-0" style="width: 80px; height: 80px;">
                              <i class="fa fa-check fa-2x text-primary"></i>
                          </div>
                          <div class="ps-3">
                              <h5>Meningkatkan Produktivitas</h5>
                              <hr class="w-25 bg-primary my-2">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Feature End -->


  <!-- How To Use Start -->
 
  <!-- How To Use End -->


  <!-- Product Start -->
  <div class="container-fluid py-5 ">
      <div class="container">
          <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <br>
            <br>
              <h1 class="text-primary mb-3"><span class="fw-light text-dark">Kategori</span> Habits yang baik </h1>
              <br>
              <br>
          </div>
          <div class="row g-4">
              @foreach($kategori as $data)
              <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                  <div class="product-item text-center border h-80   p-4">
                      <img class="img-fluid mb-4" src="{{ asset('/storage/kategori/' . $data->image)}}" alt="">
                      <a href="" class="h5 d-inline-block mb-2">{{$data->nama_kategori}}</a>
                      <br>
                      <a href="" class="h7 d-inline-block mb-2">{{$data->deskripsi}}</a>
                      <br>
                      <br>
                      <a href="{{url('habits')}}" class="btn btn-outline-primary px-3">Tandai Habits</a>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- Product End -->


  <!-- Testimonial Start -->
  <div class="container-fluid testimonial bg-primary my-5 py-5">
      <div class="container text-white py-5">
          <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="text-white mb-3">Pelanggan Kita Berkata<span class="fw-light text-dark">Tentang Daily Habits kita</span></h1>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                      <div class="testimonial-item text-center" data-dot="1">
                          <img class="img-fluid border p-2" src="{{asset('ass/assets/img/joging.png')}}" alt="">
                          <h5 class="fw-light lh-base text-white">Olahraga adalah aktivitas fisik yang dilakukan dengan tujuan untuk meningkatkan atau mempertahankan kebugaran tubuh, kesehatan, dan kesejahteraan secara keseluruhan. Olahraga dapat berupa latihan atau permainan yang melibatkan usaha fisik dan keterampilan, serta sering kali bersifat kompetitif.</h5>
                          <h5 class="mb-1">Joging</h5>
                          <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                      </div>
                      <div class="testimonial-item text-center" data-dot="2">
                          <img class="img-fluid border p-2" src="{{asset('ass/assets/img/belajar.png')}}" alt="">
                          <h5 class="fw-light lh-base text-white">Membaca adalah kegiatan yang memiliki banyak manfaat, baik bagi perkembangan individu maupun bagi kehidupan sehari-hari.</h5>
                          <h5 class="mb-1">belajar</h5>
                          <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                      </div>
                      <div class="testimonial-item text-center" data-dot="3">
                          <img class="img-fluid border p-2" src="{{asset('ass/assets/img/jurnal.png')}}" alt="">
                          <h5 class="fw-light lh-base text-white">Minum air adalah aktivitas mengonsumsi air untuk menjaga hidrasi tubuh dan mendukung berbagai fungsi vital. Air merupakan komponen utama dalam tubuh manusia, mencakup sekitar 60% dari total berat tubuh orang dewasa. Air berperan penting dalam menjaga keseimbangan cairan, mengatur suhu tubuh, dan mendukung berbagai proses fisiologis.</h5>
                          <h5 class="mb-1">Jurnal</h5>
                          <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                      </div>
                      <div class="testimonial-item text-center" data-dot="4">
                          <img class="img-fluid border p-2" src="{{asset('ass/assets/img/minum.png')}}" alt="">
                          <h5 class="fw-light lh-base text-white">Jurnal adalah catatan tertulis yang dibuat secara teratur untuk mendokumentasikan kegiatan, pengalaman, pemikiran, atau penelitian seseorang. Dalam konteks akademis dan ilmiah, jurnal juga merujuk pada publikasi periodik yang berisi artikel penelitian, studi, atau ulasan yang ditulis oleh para ahli di bidang tertentu..</h5>
                          <h5 class="mb-1">MInum Air</h5>
                          <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</body>
</html>

  <!-- Testimonial End -->