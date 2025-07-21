<main class="main">
    <!-- Bagian Hero -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="agency-name">
                <h5></h5>
              </div>
  
              <div class="main-heading">
                <h1>Jual <br />TokoSepatuKu</h1>
              </div>
  
              <div class="divider"></div>
  
              <div class="description">
                <p>
                  Temukan berbagai koleksi sepatu terbaru dan berkualitas untuk segala kebutuhan Anda. 
                  Dari sepatu kasual hingga formal, kami menghadirkan kenyamanan dan gaya dalam setiap langkah Anda.
                </p>
              </div>
  
              <div class="cta-button">
                <a href="#services" class="btn">
                  <span>Produkita</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-5" data-aos="zoom-out">
            <div class="visual-content">
              <div class="fluid-shape">
                <img
                  src="{{ asset('front/assets/img/abstract/WebNike.png') }}"
                  alt="Gambar Abstrak"
                  class="fluid-img"
                />
              </div>
  
              <div class="stats-card">
                <div class="stats-number">
                  <h2>5RB+</h2>
                </div>
                <div class="stats-label">
                  <p>Pelanggan Puas</p>
                </div>
                <div class="stats-arrow">
                  <a href="#portfolio"><i class="bi bi-arrow-up-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Bagian Hero -->
  
    <!-- Bagian Tentang -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang</h2>
        <div>
          <span>Kenali Lebih Dekat</span>
          <span class="description-title">TokoSepatuKu</span>
        </div>
      </div>
  
      <div class="container">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative">
              <img
                src="{{ asset('front/assets/img/about/about-portrait-1.webp') }}"
                class="img-fluid rounded-4 shadow-sm"
                alt="Tentang Kami"
                loading="lazy"
              />
              <div class="experience-badge">
                <span class="years">20+</span>
                <span class="text">Tahun Pengalaman</span>
              </div>
            </div>
          </div>
  
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Menjadi Pilihan Utama untuk Sepatu Berkualitas</h2>
              <p class="lead">
                Kami berkomitmen menyediakan produk sepatu dengan kualitas terbaik, kenyamanan maksimal, dan desain terkini.
              </p>
              <p>
                Dengan berbagai pilihan model dan ukuran, TokoSepatuKu siap memenuhi kebutuhan fashion kaki Anda, baik untuk kegiatan sehari-hari, olahraga, hingga acara formal.
              </p>
  
              <div class="row g-4 mt-3">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                  <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h5>Layanan Pelanggan Terbaik</h5>
                    <p>
                      Tim kami siap membantu Anda memilih produk terbaik dan memberikan pengalaman belanja online yang mudah dan aman.
                    </p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                  <div class="feature-item">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h5>Desain Kekinian</h5>
                    <p>
                      Koleksi sepatu kami selalu mengikuti tren terbaru, cocok untuk Anda yang ingin tampil stylish dan percaya diri.
                    </p>
                  </div>
                </div>
              </div>
  
              <a href="#" class="btn btn-primary mt-4">Jelajahi Produk Kami</a>
            </div>
          </div>
        </div>
  
        <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
              <div class="testimonial-intro">
                <h3>Kata Mereka</h3>
                <p>
                  Simak langsung pengalaman para pelanggan kami setelah berbelanja di TokoSepatuKu.
                </p>
                <div class="swiper-nav-buttons mt-4">
                  <button class="slider-prev">
                    <i class="bi bi-arrow-left"></i>
                  </button>
                  <button class="slider-next">
                    <i class="bi bi-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
  
            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
              <div class="testimonial-slider swiper init-swiper">
                <!-- Swiper Config -->
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                      "nextEl": ".slider-next",
                      "prevEl": ".slider-prev"
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <!-- Testimoni 1 -->
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        "Sepatunya nyaman dipakai dan kualitasnya bagus. Pengiriman juga cepat!"
                      </p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img
                          src="{{ asset('front/assets/img/person/person-f-1.webp') }}"
                          class="client-img"
                          alt="Pelanggan"
                          loading="lazy"
                        />
                        <div>
                          <h6 class="mb-0">Aulia Rahma</h6>
                          <span>Pelanggan Setia</span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Testimoni 2 -->
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>
                        "Modelnya keren dan up-to-date banget! Harganya juga bersahabat."
                      </p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img
                          src="assets/img/person/person-m-1.webp"
                          class="client-img"
                          alt="Pelanggan"
                          loading="lazy"
                        />
                        <div>
                          <h6 class="mb-0">Rian Setiawan</h6>
                          <span>Fashion Enthusiast</span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Tambahkan testimoni lain sesuai kebutuhan -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Bagian Tentang -->
  </main>
  