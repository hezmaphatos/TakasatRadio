<x-main>
    <x-slot:title>{{ $post['title'] }}</x-slot:title>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('Template/assets/img/ytbanner.png') }}');">
          <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    
            <h2>Article Details</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li><a href="/">Articles</a></li>
              <li>Article Details</li>
            </ol>
    
          </div>
        </div><!-- End Breadcrumbs -->
    
        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up" data-aos-delay="100">
    
            <div class="row g-5">
    
              <div class="col-lg-8">
    
                <article class="blog-details">
    
                  <div class="post-img">
                    <img src="{{ asset($post['image']) }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="title">{{ $post['title'] }}</h2>
    
                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post['author'] }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ $post['datetime'] }}</time></a></li>
                      <li><i class="bi bi-tags"></i><a href="#">{{ $post['category'] }}</a></li>
                    </ul>
                    
                  </div><!-- End meta top -->
    
                  <div class="content">
                    <p>
                      {{ $post['content'] }}
                    </p>
                  </div>
    
                </article>
    
              </div>
    
              <div class="col-lg-4">
    
                <div class="sidebar">
    
                    <div class="sidebar-item search-form">
                      <h3 class="sidebar-title">Search</h3>
                      <form action="" class="mt-3">
                        <input type="text">
                        <button type="submit"><i class="bi bi-search"></i></button>
                      </form>
                    </div>
      
                    <div class="sidebar-item recent-posts">
                      <h3 class="sidebar-title">Recent Posts</h3>
      
                      <div class="mt-3">
      
                        <div class="post-item mt-3">
                          <img src="{{ asset('Template/assets/img/blog/fotoblog1.jpg') }}" alt="">
                          <div>
                            <h4><a href="/posts/1">Post 1</a></h4>
                            <time datetime="2020-01-01" style="color: white;">Nov 28, 2024</time>
                          </div>
                        </div><!-- End recent post item-->
      
                        <div class="post-item">
                          <img src="{{ asset('Template/assets/img/blog/fotoblog2.jpg') }}" alt="">
                          <div>
                            <h4><a href="/posts/2">Post 2</a></h4>
                            <time datetime="2020-01-01" style="color: white;">Nov 24, 2024</time>
                          </div>
                        </div><!-- End recent post item-->
      
                        <div class="post-item">
                          <img src="{{ asset('Template/assets/img/blog/fotoblog3.jpg') }}" alt="">
                          <div>
                            <h4><a href="/posts/3">Post 3</a></h4>
                            <time datetime="2020-01-01" style="color: white;">Nov 21, 2024</time>
                          </div>
                        </div><!-- End recent post item-->
      
                        <div class="post-item">
                          <img src="{{ asset('Template/assets/img/blog/fotoblog4.jpg') }}" alt="">
                          <div>
                            <h4><a href="/posts/4">Post 4</a></h4>
                            <time datetime="2020-01-01" style="color: white;">Nov 15, 2024</time>
                          </div>
                        </div><!-- End recent post item-->
      
                        <div class="post-item">
                          <img src="{{ asset('Template/assets/img/blog/fotoblog5.jpg') }}" alt="" height="60px" width="80px">
                          <div>
                            <h4><a href="/posts/5">Post 5</a></h4>
                            <time datetime="2020-01-01" style="color: white;">Nov 2, 2024</time>
                          </div>
                        </div><!-- End recent post item-->
      
                      </div>
      
                    </div><!-- End sidebar recent posts-->
      
                    <div class="sidebar-item tags">
                      <h3 class="sidebar-title">Tags</h3>
                      <ul class="mt-3">
                        <li><a href="#">Cerita Nyata</a></li>
                        <li><a href="#">Kriminal</a></li>
                        <li><a href="#">Misteri</a></li>
                        <li><a href="#">CERAMu</a></li>
                        <li><a href="#">Film Horror</a></li>
                        <li><a href="#">Penampakan</a></li>
                      </ul>
                    </div><!-- End sidebar tags-->
      
                  </div><!-- End Blog Sidebar -->
    
              </div>
            </div>
    
          </div>
        </section><!-- End Blog Details Section -->
    
      </main><!-- End #main -->
</x-main>
