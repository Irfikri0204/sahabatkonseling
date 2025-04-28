@extends('layout.app')
@section('title','Layanan')
@section('content')
<section>
    <div class="bg-linear-to-bl from-primary-500 to-primary-800 py-20 pb-25">
      <div class="w-11/12 md:container mx-auto">
        <h3 class="text-5xl font-bold text-center mb-5 text-white">
          Layanan Konseling
        </h3>
        <p class="text-gray-500 text-center mb-5">
          Sahabat Konseling FT UNM hadir untuk mendukung mahasiswa dalam
          menghadapi berbagai tantangan akademik, sosial, dan pribadi. Temukan
          layanan yang sesuai dengan kebutuhanmu dan dapatkan bimbingan yang
          tepat untuk berkembang lebih baik
        </p>
        <div class="w-full py-5">
          <a
            href="#portofolio"
            class="bg-secondary-500 text-black font-semibold py-3 px-5 rounded-xl hover:bg-secondary-700 w-fit block mx-auto"
            >Mulai Konseling</a
          >
        </div>
      </div>
    </div>
    <div class="card bg-gray-100 w-full py-10 -mt-10 rounded-t-3xl">
      <div
        class="w-11/12 md:container md:w-6xl mx-auto flex flex-col gap-y-4"
      >
        <h3 class="font-bold text-center text-4xl mb-6 text-black">
          Pilihan Metode Layanan
        </h3>

        <div class="flex flex-col md:flex-row gap-5 mb-5">
          <div
            class="konten w-full md:w-1/2 p-5 text-white bg-gradient-to-b from-primary-500 via-primary-400 to-primary-300 rounded-lg shadow-md"
          >
            <h4 class="font-bold text-3xl mb-5 md:text-center">
              Metode Offline
            </h4>
            <p class="">
              Bagi yang ingin berdiskusi langsung dengan konselor, layanan ini
              tersedia di lokasi kampus dengan jadwal yang telah ditentukan
            </p>
          </div>
          <div
            class="konten w-full md:w-1/2 p-5 text-white bg-gradient-to-b from-primary-500 via-primary-400 to-primary-300 rounded-lg shadow-md"
          >
            <h4 class="font-bold text-3xl mb-5 md:text-center">
              Metode Online
            </h4>
            <p class="">
              Dapatkan sesi konseling melalui platform digital (chat atau
              video call) tanpa harus datang langsung ke kampus. Praktis dan
              fleksibel sesuai dengan jadwalmu.
            </p>
          </div>
        </div>

        <hr
          class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-40 dark:via-neutral-400"
        />

        <h3 class="font-bold text-center text-4xl mb-6 text-black">
          Jenis Konseling yang Tersedia
        </h3>

        <div id="akademik" class="flex flex-col md:flex-row gap-6">
          <img src="https://placehold.co/250x250" />
          <div class="konten">
            <h4 class="font-bold text-3xl md:text-2xl mb-5">
              Konseling Akademik
            </h4>
            <p class="font-semibold mb-5">
              Kesulitan dalam belajar? Kami siap membantu!
            </p>
            <p class="mb-5">
              Dapatkan bimbingan untuk mengatasi kesulitan belajar, manajemen
              waktu, strategi menghadapi ujian, serta perencanaan akademik
              yang lebih baik agar perjalanan studimu lebih lancar.
            </p>
          </div>
        </div>
        <div id="pribadi" class="flex flex-col md:flex-row gap-6">
          <img src="https://placehold.co/250x250" />
          <div class="konten">
            <h4 class="font-bold text-3xl md:text-2xl mb-5">
              Konseling Pribadi
            </h4>
            <p class="font-semibold mb-5">
              Hubungan Stop bullying! Kamu tidak sendirian.
            </p>
            <p class="mb-5">
              Jika kamu mengalami atau menyaksikan tindakan perundungan,
              jangan diam! Kami siap mendengarkan dan membantumu mencari
              solusi untuk menghadapi serta mengatasi dampak psikologis dari
              perundungan.
            </p>
          </div>
        </div>
        <div id="sosial" class="flex flex-col md:flex-row gap-6">
          <img src="https://placehold.co/250x250" />
          <div class="konten">
            <h4 class="font-bold text-3xl md:text-2xl mb-5">
              Konseling Sosial
            </h4>
            <p class="font-semibold mb-5">
              Bantu atasi kesulitan dalam beradaptasi dan bersosialisasi.
            </p>
            <p class="mb-5">
              Kesulitan dalam menjalin hubungan dengan teman, menghadapi
              lingkungan baru, atau mengalami kecemasan sosial? Kami siap
              membantumu membangun keterampilan sosial yang lebih baik.
            </p>
          </div>
        </div>
        <div id="karir" class="flex flex-col md:flex-row gap-6">
          <img src="https://placehold.co/250x250" />
          <div class="konten">
            <h4 class="font-bold text-3xl md:text-2xl mb-5">
              Konseling Karir
            </h4>
            <p class="font-semibold mb-5">
              Persiapkan dirimu untuk masa depan yang lebih cerah
            </p>
            <p class="mb-5">
              Dapatkan panduan dalam menentukan arah karir, menyusun CV,
              menghadapi wawancara kerja, serta mengembangkan keterampilan
              yang dibutuhkan di dunia kerja agar kamu lebih siap memasuki
              dunia profesional.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
