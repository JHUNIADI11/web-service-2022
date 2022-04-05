@extends('layout.frontend.master')
@section('content')

<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Saya</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Nama :</strong>JUNIADI</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Tgl/Lahir :</strong> 10 JUNI 2000</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Alamat :</strong> Desa Anyar,Kec.bayan kab.Lombok Utara</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Jenis kelamin:</strong> Laki-Laki</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>No.Handphone :</strong> 0877 6247 8975</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Prov :</strong> Nusa Tenggara Barat</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Umur:</strong> 21</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Status:</strong> Mahasiswa</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Golongan Darah:</strong> B</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Hobbi:</strong> Sepak Bola</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Cita-Cita:</strong> Pokoknya Sukses</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> jhuniadi11@Gmail.com</li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>KEMAMPUAN</h2>
          <p>Adapun Statistik Kemampuan Yang Saya Miliki Di Masing Masing Bidang Olahraga</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Futsal <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Sepak Bola <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">bulu Tangkis <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Tenis Meja <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Volly Ball<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Basket <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>IDOLA</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/messi.jpg" class="testimonial-img" alt="">
                <h3>Leoal Messi</h3>
                <h4>Pemain Sepak Bola</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  “Saya lebih suka menang bersama tim daripada menerima penghargaan secara pribadi atau mencetak banyak gol daripada orang lain. Saya lebih berpikir tentang menjadi orang baik daripada menjadi pemain sepak bola terbaik di dunia. Ketika semua ini berakhir, apa yang tersisa? Ketika saya pensiun, saya harap saya diingat sebagai pria yang baik.” -Lionel Messi
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/falcao.jpg" class="testimonial-img" alt="">
                <h3>Falcao</h3>
                <h4>Pemain Futsal</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Saya selalu memiliki filosofi yang saya dapatkan dari ayah saya. Dia biasa berkata, "Dengarkan. Tuhan memberimu hadiah untuk bermain sepak bola. Ini hadiah dari Tuhan. Jika kamu menjaga kesehatanmu, jika kamu selalu dalam kondisi prima, dengan hadiah dari Tuhan, tidak ada yang akan menghentikanmu, tetapi kamu harus siap.-fALCAO".
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/kevin.jpg" class="testimonial-img" alt="">
                <h3>Kevin Sanjaya</h3>
                <h4>Pemain Bulu Tangkis</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Yang terlihat baik belum tentu baik yang terlihat buruk belum tentu buruk so enjoy every moment in our life and smash harder.-KEVIN SANJAYA"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/rivan.jpg" class="testimonial-img" alt="">
                <h3>Rivan</h3>
                <h4>Pemain Bola Volly</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Mainkanlah dirimu dengan maksimal, jangan ada keraguan dalam permainan, lepaskanlah semuanya dan menangkan pertandinganmu".-RIVAN
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
