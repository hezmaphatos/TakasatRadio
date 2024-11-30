<x-main>
    <x-slot:title>{{  $title }}</x-slot:title>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('Template/assets/img/ytbanner.png');">
          <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
    
            <h2>Articles</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Articles</li>
            </ol>
    
          </div>
        </div><!-- End Breadcrumbs -->
    
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up" data-aos-delay="100">
    
            <div class="row gy-4 posts-list">
    
            @foreach($posts as $post)
                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100">
                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{ asset($post['image']) }}" class="img-fluid" alt="{{ $post['title'] }}">
                            <span class="post-date">{{ \Carbon\Carbon::parse($post['datetime'])->format('F j, Y') }}</span>
                        </div>

                        <div class="post-content d-flex flex-column">
                            <h3 class="post-title">{{ $post['title'] }}</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">{{ $post['author'] }}</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $post['category'] }}</span>
                                </div>
                            </div>

                            <p>
                                {{ \Illuminate\Support\Str::words($post['content'], 40, '...') }}
                            </p>

                            <hr>

                            <a href="{{ url('/posts/' . $loop->index + 1) }}" class="readmore stretched-link">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End post list item -->
            @endforeach

    
            </div><!-- End blog posts list -->
    
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->
    
          </div>
        </section><!-- End Blog Section -->
    
      </main>
</x-main>