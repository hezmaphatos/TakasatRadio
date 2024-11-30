<x-main>
    <x-slot:title>{{  $title }}</x-slot:title>
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down">Takasat <span class="merah">Radio</span> </h2>
                <h3 data-aos="fade-up">66.6 FM</h3>
                <p data-aos="fade-up">Let Us Hear, What You Fear!</p>
                <button data-aos="fade-up" data-aos-delay="100" href="#" class="btn-get-started" id="open-popup"><span class="fa fa-play fa-2x"></span></button>
              </div>
            </div>
          </div>
        </div>
    
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    
          <div class="carousel-item active" style="background-image: url(Template/assets/img/Home.png)">
          </div>
        </div>
    
      </section>

      <div class="overlay" id="overlay"></div>

      <div class="audiobody">
          <div class="audioplayer">
              <div class="player-img">
                  <img src="" class="active" id="cover">
              </div>
      
              <h2 id="music-title"></h2>
              <h3 id="music-artist"></h3>
      
              <div class="player-progress" id="player-progress">
                  <div class="progress" id="progress"></div>
                  <div class="music-duration">
                      <span id="current-time">0:00</span>
                      <span id="duration">0:00</span>
                  </div>
              </div>
      
              <div class="player-controls">
                  <i class="fa-solid fa-backward" title="Previous" id="prev"></i>
                  <i class="fa-solid fa-play play-button" title="Play" id="play"></i>
                  <i class="fa-solid fa-forward" title="Next" id="next"></i>
      
              </div>
          </div>
      </div>

    <main id="main">
        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <h2>Weekly Programs</h2>
            </div>
    
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
              data-portfolio-sort="original-order">
    
              <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-senin">Senin</li>
                <li data-filter=".filter-selasa">Selasa</li>
                <li data-filter=".filter-rabu">Rabu</li>
                <li data-filter=".filter-kamis">Kamis</li>
                <li data-filter=".filter-jumat">Jumat</li>
              </ul>
    
              <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-senin filter-kamis">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/audio/ceramu.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>CERAMu</h4>
                      <p>Cerita Seram Kamu</p>
                      <a href="Template/assets/img/audio/ceramu.png" title="Cerita Seram Kamu"
                        data-gallery="portfolio-gallery-senin" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a href="/programs/1" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-senin filter-selasa">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/senin-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Program 2</h4>
                      <p>Program 2</p>
                      <a href="Template/assets/img/senin-2.jpg" title="Program 2"
                        data-gallery="portfolio-gallery-senin" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a href="/programs/2" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-senin filter-kamis">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/senin-3.jpeg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Program 3</h4>
                      <p>Program 3</p>
                      <a href="Template/assets/img/senin-3.jpeg" title="Program 3" data-gallery="portfolio-gallery-senin"
                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="/programs/3" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-selasa filter-kamis">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/selasa-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Program 4</h4>
                      <p>Program 4</p>
                      <a href="Template/assets/img/selasa-1.jpg" title="Program 4" data-gallery="portfolio-gallery-book"
                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="/programs/4" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-selasa">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/selasa-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Program 5</h4>
                      <p>Program 5</p>
                      <a href="Template/assets/img/selasa-2.jpg" title="Program 5"
                        data-gallery="portfolio-gallery-selasa" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a href="/programs/5" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-rabu filter-jumat">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/rabu-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Program 6</h4>
                      <p>Program 6</p>
                      <a href="Template/assets/img/rabu-2.jpg" title="Program 6" data-gallery="portfolio-gallery-rabu"
                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="/programs/6" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-rabu">
                  <div class="portfolio-content h-100">
                    <img src="Template/assets/img/kamis-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Program 7</h4>
                      <p>Program 7</p>
                      <a href="Template/assets/img/kamis-2.jpg" title="Program 7"
                        data-gallery="portfolio-gallery-rabu" class="glightbox preview-link"><i
                          class="bi bi-zoom-in"></i></a>
                      <a href="/programs/7" title="More Details" class="details-link"><i
                          class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-jumat">
                    <div class="portfolio-content h-100">
                      <img src="Template/assets/img/jumat-1.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Program 8</h4>
                        <p>Program 8</p>
                        <a href="Template/assets/img/jumat-1.jpg" title="Program 8" data-gallery="portfolio-gallery-book"
                          class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="/programs/8" title="More Details" class="details-link"><i
                            class="bi bi-eye"></i></a>
                      </div>
                    </div>
                  </div><!-- End Projects Item -->

                  <div class="col-lg-4 col-md-6 portfolio-item filter-rabu filter-jumat">
                    <div class="portfolio-content h-100">
                      <img src="Template/assets/img/jumat-2.jpg" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>Program 9</h4>
                        <p>Program 9</p>
                        <a href="Template/assets/img/jumat-2.jpg" title="Program 9" data-gallery="portfolio-gallery-book"
                          class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="/programs/9" title="More Details" class="details-link"><i
                            class="bi bi-eye"></i></a>
                      </div>
                    </div>
                  </div><!-- End Projects Item -->
    
              </div><!-- End Projects Container -->
    
            </div>
    
          </div>
        </section><!-- End Our Projects Section -->
    
        <!-- ======= Takascrews Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <h2>Takascrews</h2>
            </div>
    
            <div class="slides-2 swiper">
              <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                          <img src="Template/assets/img/crews/it.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>
    
                <div class="swiper-slide">
                    <img src="Template/assets/img/crews/ac.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>
    
                <div class="swiper-slide">
                    <img src="Template/assets/img/crews/p.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>
    
                <div class="swiper-slide">
                    <img src="Template/assets/img/crews/n.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

                <div class="swiper-slide">
                  <img src="Template/assets/img/crews/vc.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

                <div class="swiper-slide">
                  <img src="Template/assets/img/crews/unnoun.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

                <div class="swiper-slide">
                  <img src="Template/assets/img/crews/ma.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

                <div class="swiper-slide">
                  <img src="Template/assets/img/crews/md.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

                <div class="swiper-slide">
                  <img src="Template/assets/img/crews/ec.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

                <div class="swiper-slide">
                  <img src="Template/assets/img/crews/dc.png" class="img-fluid" alt="" width="85%" height="85%">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
        </section><!-- End Testimonials Section -->
    
        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
          <div class="container" data-aos="fade-up">
    
        
        
      <div class=" section-header">
            <h2>Recent Blog Posts</h2>
          </div>
    
          <div class="row gy-5">
    
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-item position-relative h-100">
    
                <div class="post-img position-relative overflow-hidden">
                  <img src="Template/assets/img/blog/fotoblog1.jpg" class="img-fluid" alt="">
                  <span class="post-date">November 28</span>
                </div>
    
                <div class="post-content d-flex flex-column">
    
                  <h3 class="post-title">Ini blog 1</h3>
    
                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i> <span class="ps-2">Author 1</span>
                    </div>
                    <span class="px-3 text-white-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i> <span class="ps-2">Misteri</span>
                    </div>
                  </div>
    
                  <hr>
    
                  <a href="/posts/1" class="readmore stretched-link"><span>Read More</span><i
                      class="bi bi-arrow-right"></i></a>
    
                </div>
    
              </div>
            </div><!-- End post item -->
    
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="post-item position-relative h-100">
    
                <div class="post-img position-relative overflow-hidden">
                  <img src="Template/assets/img/blog/fotoblog2.jpg" class="img-fluid" alt="">
                  <span class="post-date">November 24</span>
                </div>
    
                <div class="post-content d-flex flex-column">
    
                  <h3 class="post-title">Ini Blog 2</h3>
    
                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i> <span class="ps-2">Author 2</span>
                    </div>
                    <span class="px-3 text-white-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i> <span class="ps-2">Kriminal</span>
                    </div>
                  </div>
    
                  <hr>
    
                  <a href="/posts/2" class="readmore stretched-link"><span>Read More</span><i
                      class="bi bi-arrow-right"></i></a>
    
                </div>
    
              </div>
            </div><!-- End post item -->
    
            <div class="col-xl-4 col-md-6">
              <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">
    
                <div class="post-img position-relative overflow-hidden">
                  <img src="Template/assets/img/blog/fotoblog3.jpg" class="img-fluid" alt="">
                  <span class="post-date">November 21</span>
                </div>
    
                <div class="post-content d-flex flex-column">
    
                  <h3 class="post-title">Ini blog 3</h3>
    
                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i> <span class="ps-2">Author 3</span>
                    </div>
                    <span class="px-3 text-white-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i> <span class="ps-2">Cerita Nyata</span>
                    </div>
                  </div>
    
                  <hr>
    
                  <a href="/posts/3" class="readmore stretched-link"><span>Read More</span><i
                      class="bi bi-arrow-right"></i></a>
    
                </div>
    
              </div>
            </div><!-- End post item -->
    
          </div>
    
          </div>
        </section>
        <!-- End Recent Blog Posts Section -->

                <!-- ======= Get Started Section ======= -->
                <section id="get-started" class="get-started section-bg">
                  <div class="container">
                    <div class="row gy-4">
                
                      <!-- Spotify Section -->
                      <div class="col-lg-6 text-center" data-aos="fade-up">
                        <h3>Spotify</h3>
                        <iframe
                          style="border-radius:12px"
                          src="https://open.spotify.com/embed/playlist/0TODuq9nEnITiuECqDfQJU?utm_source=generator&theme=0"
                          width="100%"
                          height="352"
                          frameborder="0"
                          allowfullscreen=""
                          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                          loading="lazy"
                        ></iframe>
                      </div>
                
                      <!-- YouTube Section -->
                      <div class="col-lg-6 text-center" data-aos="fade-up">
                        <h3>YouTube</h3>
                        <iframe
                          src="https://www.youtube.com/embed/ktP6DqjUw0Q?si=xU31xnPcxdvvJ_zb"
                          width="100%"
                          height="352"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerpolicy="strict-origin-when-cross-origin"
                          allowfullscreen
                        ></iframe>
                      </div>
                
                    </div>
                  </div>
                </section>
                
                
    
      </main>
</x-main>