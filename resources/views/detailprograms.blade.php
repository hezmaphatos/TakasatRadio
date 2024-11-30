<x-main>
    <x-slot:title>{{ $programs['title'] }}</x-slot:title>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('Template/assets/img/ytbanner.png') }}');">
          <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    
            <h2>Program Details</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li><a href="/programs">Programs</a></li>
              <li>Program Details</li>
            </ol>
    
          </div>
        </div><!-- End Breadcrumbs -->
    
        <!-- ======= Projet Details Section ======= -->
        <section id="project-details" class="project-details">
          <div class="container" data-aos="fade-up" data-aos-delay="100">
    
            <div class="position-relative h-100">
              <div class="slides-1 portfolio-details-slider swiper">
                <img src="{{ asset($programs['image']) }}" alt="" height="800px">
              </div>
            </div>
    
            <div class="row justify-content-between gy-4 mt-4">
    
              <div class="col-lg-8">
                <div class="portfolio-description">
                  <h2>{{ $programs['title'] }}</h2>
                  <h6>{{ $programs['meaning'] }}</h6>
                  <h6>{!! $programs['jadwal'] !!}</h6>
                  <p>
                    {{ $programs['content'] }}
                  </p>
                </div>
              </div>
    
              <div class="col-lg-3">
                <div class="portfolio-info">
                  <h3>TakasCrews</h3>
                  <ul>
                    <li><strong>Announcer</strong> <span>{{ $programs['announcer'] }}</span></li>
                    <li><strong>Producer</strong> <span>{{ $programs['producer'] }}</span></li>
                    <li><strong>Visual Creative</strong> <span>{{ $programs['vc'] }}</span></li>
                    <li><strong>Audio Creative</strong> <span>{{ $programs['ac'] }}</span></li>
                    <li><strong>Media Affairs</strong> <span>{{ $programs['ma'] }}</span></li>
                    <li><strong>Music Director</strong> <span>{{ $programs['md'] }}</span></li>
                    <li><strong>Operator</strong> <span>{{ $programs['op'] }}</span></li>
                  </ul>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Projet Details Section -->
    
      </main><!-- End #main -->
</x-main>