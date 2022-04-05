@extends('layout.frontend.master')
@section('content')

<main id="main">

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Kumpulan Foto</h2>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Saya</li>
          <li data-filter=".filter-card">Teman</li>
          <li data-filter=".filter-web">Keluarga</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/juniadi.1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Saya</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/juniadi.1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/juniadi.9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Saya</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/juniadi.9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Saya"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/juniadi.7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Saya</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/juniadi.7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Saya"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/teman1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teman</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/teman1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/teman2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teman</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/teman2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/teman3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teman</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/teman3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/teman4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teman</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/teman4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/teman5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teman</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/teman5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/teman6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Teman</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/teman6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Teman"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/keluarga2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Keluarga</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/keluarga2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/keluarga1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Keluarga</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/keluarga1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/keluarga3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Keluarga</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/keluarga3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/keluarga7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Keluarga</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/keluarga7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/keluarga5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Keluarga</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/keluarga5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/keluarga8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Keluarga</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/keluarga8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->