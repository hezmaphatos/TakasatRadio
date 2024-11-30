<footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
                <img src="{{ asset('Template/assets/img/Logo.png') }}" alt="" width="70px" height="50px" class="mb-3">
              <p>
                UMN <br>
                Gading Serpong, Tangerang Selatan<br><br>
                <strong>Phone:</strong> +62 123 4567 8910<br>
                <strong>Email:</strong> TakasatRadio@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://youtube.com/@takasatradio7?si=OFxlr9Tov1TjRk1l" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-youtube"></i></a>
                <a href="https://open.spotify.com/playlist/0TODuq9nEnITiuECqDfQJU?si=m_SNF3O_TGeowcQerlixIg&pi=a-lHoZzcdqSzWK" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-spotify"></i></a>
                <a href="https://www.instagram.com/takasat.radio?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links mt-4">
            <h4>Menu</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/programs">Programs</a></li>
              <li><a href="/posts">Article</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4 class="mt-4">Sponsored By</h4>
            <br>
            <img src="{{ asset('Template/assets/img/jamz.png') }}" alt="" width="70px" height="70px" class="mb-3">
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; <strong><span>Takasat Radio</span></strong>
        </div>
        <div class="credits">
          Dikelola oleh Yehezkiel Natanael 2024
        </div>
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ asset('Template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Template/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Template/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('Template/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://open.spotify.com/embed/iframe-api/v1" async></script>


  <script src="{{ asset('Template/assets/js/main.js') }}"></script>
  <script>
    const popup = document.querySelector('.audiobody');
    const overlay = document.getElementById('overlay');
    const openButton = document.getElementById('open-popup');
    const closeButton = document.getElementById('close-popup');
    const audio = document.querySelector('audio');

    openButton.addEventListener('click', () => {
        popup.classList.add('active');
        overlay.classList.add('active');
    });

    const closePopup = () => {
        popup.classList.remove('active');
        overlay.classList.remove('active');
    };

    overlay.addEventListener('click', closePopup);
    if (closeButton) {
        closeButton.addEventListener('click', closePopup);
    }
</script>