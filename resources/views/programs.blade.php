<x-main>
    <x-slot:title>{{  $title }}</x-slot:title>
    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('Template/assets/img/ytbanner.png') }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
          <h2>Weekly Programs</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Programs</li>
          </ol>
  
        </div>
      </div><!-- End Breadcrumbs -->
            <!-- ======= Features Section ======= -->
            <section id="features" class="features section-bg">
                <div class="container" data-aos="fade-up">
          
                  <ul class="nav nav-tabs row  g-2 d-flex">
          
                    <li class="nav-item col-2">
                      <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#senin">
                        <h4>Senin</h4>
                      </a>
                    </li><!-- End tab nav item -->
          
                    <li class="nav-item col-2">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#selasa">
                        <h4>Selasa</h4>
                      </a><!-- End tab nav item -->
          
                    <li class="nav-item col-2">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#rabu">
                        <h4>Rabu</h4>
                      </a>
                    </li><!-- End tab nav item -->
          
                    <li class="nav-item col-2">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kamis">
                        <h4>Kamis</h4>
                      </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-2">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#jumat">
                        <h4>Jumat</h4>
                      </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-2">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#daily">
                        <h4>Daily</h4>
                      </a>
                    </li><!-- End tab nav item -->
          
                  </ul>
          
                  <div class="tab-content">
          
                    <div class="tab-pane active show" id="senin">
                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                          data-aos="fade-up" data-aos-delay="100">
                          <h3><a href="/programs/1">CERAMu</a></h3>
                          <p class="fst-italic">
                            Cerita Seram Kamu
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Alexa Cleophilia | Eunike </li>
                            <li><i class="bi bi-clock"></i> 17.00 - 19.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/1"><img src="Template/assets/img/audio/ceramu.png" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                          data-aos="fade-up" data-aos-delay="100">
                          <h3><a href="/programs/2">Program 2</a></h3>
                          <p class="fst-italic">
                            Program 2
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 3 | Announcer 4 </li>
                            <li><i class="bi bi-clock"></i> 19.00 - 20.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/2"><img src="Template/assets/img/senin-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                          data-aos="fade-up" data-aos-delay="100">
                          <h3><a href="/programs/3">Program 3</a></h3>
                          <p class="fst-italic">
                            Program 3
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 5 | Announcer 6 </li>
                            <li><i class="bi bi-clock"></i> 20.00 - 21.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/3"><img src="Template/assets/img/senin-3.jpeg" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                    </div>
          
                    <div class="tab-pane" id="selasa">
                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/2">Program 2</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 3 | Announcer 4 </li>
                            <li><i class="bi bi-clock"></i> 17.00 - 18.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/2"><img src="Template/assets/img/senin-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/4">Program 4</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 7 | Announcer 8 </li>
                            <li><i class="bi bi-clock"></i> 18.00 - 19.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/4"><img src="Template/assets/img/selasa-1.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/5">Program 5</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 9 | Announcer 10 </li>
                            <li><i class="bi bi-clock"></i> 19.00 - 21.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/5"><img src="Template/assets/img/selasa-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                    </div><!-- End tab content item -->
          
                    <div class="tab-pane" id="rabu">
                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/6">Program 6</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 11 | Announcer 12 </li>
                            <li><i class="bi bi-clock"></i> 17.00 - 18.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/6"><img src="Template/assets/img/rabu-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/7">Program 7</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 13 | Announcer 14 </li>
                            <li><i class="bi bi-clock"></i> 18.00 - 19.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/7"><img src="Template/assets/img/kamis-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/9">Program 9</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 15 | Announcer 16 </li>
                            <li><i class="bi bi-clock"></i> 19.00 - 21.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/9"><img src="Template/assets/img/jumat-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                    </div><!-- End tab content item -->
          
                    <div class="tab-pane" id="kamis">
                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                          data-aos="fade-up" data-aos-delay="100">
                          <h3><a href="/programs/1">CERAMu</a></h3>
                          <p class="fst-italic">
                            Cerita Seram Kamu
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Alexa Cleophilia | Eunike </li>
                            <li><i class="bi bi-clock"></i> 17.00 - 19.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/1"><img src="Template/assets/img/audio/ceramu.png" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                          data-aos="fade-up" data-aos-delay="100">
                          <h3><a href="/programs/3">Program 3</a></h3>
                          <p class="fst-italic">
                            Program 3
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 5 | Announcer 6 </li>
                            <li><i class="bi bi-clock"></i> 19.00 - 20.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/3"><img src="Template/assets/img/senin-3.jpeg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/4">Program 4</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 7 | Announcer 8 </li>
                            <li><i class="bi bi-clock"></i> 20.00 - 21.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/4"><img src="Template/assets/img/selasa-1.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="jumat">
                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/6">Program 6</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 11 | Announcer 12 </li>
                            <li><i class="bi bi-clock"></i> 17.00 - 18.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/6"><img src="Template/assets/img/rabu-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/8">Program 8</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 17 | Announcer 18 </li>
                            <li><i class="bi bi-clock"></i> 18.00 - 19.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/8"><img src="Template/assets/img/jumat-1.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3><a href="/programs/9">Program 9</a></h3>
                          <p class="fst-italic">
                            kepanjangan dari program
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Announcer 15 | Announcer 16 </li>
                            <li><i class="bi bi-clock"></i> 19.00 - 21.00 </li>
                          </ul>
                            <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <a href="/programs/9"><img src="Template/assets/img/jumat-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="daily">
                      <div class="row mb-3">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                          data-aos="fade-up" data-aos-delay="100">
                          <h3><a href="/programs/10">Daily Music</a></h3>
                          <p class="fst-italic">
                            Daily Music
                          </p>
                          <ul>
                            <li><i class="bi bi-person"></i> Takascrews </li>
                            <li><i class="bi bi-clock"></i> 16.00 - 17.00 </li>
                          </ul>
                          <p>Paragraf singkat ttg program</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <a href="/programs/10"><img src="Template/assets/img/logo.png" alt="" class="img-fluid"></a>
                        </div>
                      </div>
                    </div>
          
                  </div>
          
                </div>
              </section><!-- End Features Section -->
    </main>
</x-main>