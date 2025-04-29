@extends('layout.app')
@section('title','Home')
@section('content')
<section
class="relative h-screen flex items-center justify-center text-white bg-primary-500"
>
<!-- Background Image + Overlay -->
<div
style="background-image: url('{{ asset('img/bg-hero.JPG') }}')"
  class="absolute inset-0 bg-cover bg-center bg-fixed"
>
  <div class="absolute inset-0 bg-primary-500 opacity-60"></div>
</div>

<!-- Konten -->
<div class="relative z-10 text-center w-3/4 md:w-2/4">
  <h3 class="text-5xl font-bold mb-5">Sahabat Konseling FT UNM</h3>
  <p class="text-gray-200 mb-5">
    Sahabat Konseling FT UNM hadir untuk mendukung mahasiswa Fakultas
    Teknik Universitas Negeri Makassar dalam menghadapi tantangan
    akademik, pribadi, dan sosial. Jangan ragu untuk mencari bantuan, kami
    hadir untuk mendukung setiap langkah kecil menuju perubahan berharga.
  </p>
  <a
    href="/pengajuan-konseling"
    class="bg-secondary-500 text-black font-semibold py-3 px-5 rounded-xl hover:bg-secondary-700"
    >Mulai Konseling</a
  >
</div>
</section>

<section class="bg-gray-200 py-20">
<div class="w-11/12 md:container mx-auto">
  <h3 class="text-5xl font-bold text-center mb-5">
    Layanan Yang Dapat Diakses
  </h3>
  <p class="text-gray-500 text-center mb-5">
    Kami hadir untuk mendukung kesejahteraan mental dan perkembangan
    pribadi mahasiswa. Dapatkan layanan bimbingan dan konseling sesuai
    dengan kebutuhanmu, mulai dari akademik, sosial, hingga karir.
  </p>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
    <div class="py-5 px-5 bg-white rounded-xl hover:bg-primary-500 hover:text-white">
      <div>
        <h4 class="text-2xl font-bold mb-5">Konseling Akademik</h4>
        <p>
          Bimbingan untuk mengatasi kesulitan belajar dan strategi
          akademik yang lebih baik.
        </p>
      </div>
    </div>

    <!-- service 2-->
    <div class="py-5 px-5 bg-white rounded-xl hover:bg-primary-500 hover:text-white">
      <div>
        <h4 class="text-2xl font-bold mb-5">Konseling Pribadi</h4>
        <p>
          Konsultasi terkait pencegahan dan penanganan kekerasan seksual
          di lingkungan kampus.
        </p>
      </div>
    </div>

    <div class="py-5 px-5 bg-white rounded-xl hover:bg-primary-500 hover:text-white">
      <div>
        <h4 class="text-2xl font-bold mb-5">Konseling Sosial</h4>
        <p>
          Membantu dalam mengatasi masalah pergaulan, komunikasi, dan
          adaptasi sosial.
        </p>
      </div>
    </div>

    <div class="py-5 px-5 bg-white rounded-xl hover:bg-primary-500 hover:text-white">
      <div>
        <h4 class="text-2xl font-bold mb-5">Konseling Karir</h4>
        <p>
          Panduan untuk merancang masa depan dan persiapan memasuki dunia
          kerja.
        </p>
      </div>
    </div>
  </div>
</div>
</section>

<!-- post -->
<section id="post" class="bg-gray-100 py-20">
<div class="w-11/12 md:container mx-auto flex flex-col">
  <h3 class="text-5xl font-bold text-center mb-5">Postingan Terbaru</h3>
  <p class="text-gray-500 mb-5 text-center">
    Temukan berbagai artikel bermanfaat seputar kesehatan mental, tips
    mengelola stres, dan pengembangan diri untuk mendukung
    kesejahteraanmu!
  </p>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <!-- post 1-->
    <div class="shadow-xl rounded-md">
      <a href="">
        <img
          src="https://placehold.co/600x400"
          class="w-full rounded-t-md"
        />
        <div class="py-3 px-5">
          <h4 class="font-bold">
            Mengatasi Overthinking dan Kecemasan Berlebih
          </h4>
          <p class="text-gray-500 mb-2 text-justify">
            Pikiran yang terus-menerus mengkhawatirkan sesuatu bisa
            menguras energi. Pelajari teknik relaksasi dan strategi
            mengatasi overthinking agar lebih tenang...
          </p>
          <a href="" class="hover:text-gray-500 text-justify"
            >Baca Selengkapnya</a
          >
        </div>
      </a>
    </div>
    <!-- post 2-->
    <div class="shadow-xl rounded-md">
      <a href="">
        <img
          src="https://placehold.co/600x400"
          class="w-full rounded-t-md"
        />
        <div class="py-3 px-5">
          <h4 class="font-bold">
            Pentingnya Dukungan Sosial untuk Kesehatan Mental
          </h4>
          <p class="text-gray-500 mb-2 text-justify">
            Tidak perlu menghadapi segalanya sendirian. Dukungan dari
            teman, keluarga, atau konselor dapat membantu meningkatkan
            kesejahteraan mental...
          </p>
          <a href="" class="hover:text-gray-500 text-justify"
            >Baca Selengkapnya</a
          >
        </div>
      </a>
    </div>
    <!-- post 3-->
    <div class="shadow-xl rounded-md">
      <a href="">
        <img
          src="https://placehold.co/600x400"
          class="w-full rounded-t-md"
        />
        <div class="py-3 px-5">
          <h4 class="font-bold">
            Mengelola Stres dengan Teknik Relaksasi Sederhana
          </h4>
          <p class="text-gray-500 mb-2 text-justify">
            Stres yang tidak dikelola dengan baik dapat berdampak pada
            kesehatan mental dan fisik. Beberapa teknik sederhana seperti
            pernapasan dalam, meditasi, atau...
          </p>
          <a href="" class="hover:text-gray-500 text-justify"
            >Baca Selengkapnya</a
          >
        </div>
      </a>
    </div>
    <!-- post 4-->
    <div class="shadow-xl rounded-md">
      <a href="">
        <img
          src="https://placehold.co/600x400"
          class="w-full rounded-t-md"
        />
        <div class="py-3 px-5">
          <h4 class="font-bold">
            Pentingnya Dukungan Sosial untuk Kesehatan Mental
          </h4>
          <p class="text-gray-500 mb-2 text-justify">
            Tidak perlu menghadapi segalanya sendirian. Dukungan dari
            teman, keluarga, atau konselor dapat membantu meningkatkan
            kesejahteraan mental...
          </p>
          <a href="" class="hover:text-gray-500 text-justify"
            >Baca Selengkapnya</a
          >
        </div>
      </a>
    </div>
  </div>
  <a
    href="blog.html"
    class="w-full md:w-fit font-semibold mx-auto md:px-6 py-3 mt-5 text-white bg-primary-500 rounded-md shadow-md text-center hover:bg-primary-600"
    >Lihat Artikel Lainnya</a
  >
</div>
</section>
@endsection
