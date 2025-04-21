@extends('layout.app')
@section('title', 'Tentang Konselor')
@section('content')
<section>
    <div class="bg-linear-to-bl from-primary-500 to-primary-800 py-20 pb-25">
      <div class="w-11/12 md:container mx-auto">
        <h3 class="text-5xl font-bold text-center mb-5 text-white">
          Kenali Konselor & Konselor Sebaya Kami
        </h3>
        <p class="text-gray-500 text-center mb-5">
          Di Sahabat Konseling FT UNM, kami memiliki tim konselor profesional
          dan konselor sebaya yang siap mendampingi mahasiswa dalam menghadapi
          berbagai tantangan akademik, sosial, maupun pribadi. Dengan
          pendekatan yang empati dan solusi yang tepat, kami hadir untuk
          mendukung perjalanan Anda menuju kesejahteraan mental dan
          perkembangan diri yang lebih baik.
        </p>
      </div>
    </div>
    <div class="card bg-gray-100 w-full py-10 -mt-10 rounded-t-3xl">
      <div
        class="w-11/12 md:container md:w-6xl mx-auto flex flex-col gap-y-4"
      >
        <div class="konselor">
          <!-- About Konselor -->
          <h3 class="font-bold text-center text-4xl mb-6 text-black">
            Konselor Ahli
          </h3>
          <p class="text-justify mb-2">
            Tim konselor kami terdiri dari tenaga ahli yang memiliki
            kompetensi di bidang bimbingan dan konseling. Mereka siap
            memberikan layanan konseling berbasis ilmu dan pengalaman untuk
            membantu mahasiswa dalam berbagai aspek kehidupan, baik akademik,
            karir, maupun sosial.
          </p>
          <div>
            <p class="mb-2">
              <span class="font-bold">Pendekatan:</span> Profesional, empati,
              dan berbasis solusi
            </p>
            <p class="mb-2">
              <span class="font-bold">Bidang Konseling:</span>
              Akademik, Sosial, Karir, dan Pribadi
            </p>
            <p class="mb-2">
              <span class="font-bold">Metode Layanan:</span> Tatap muka
              (offline) & Konseling online
            </p>
          </div>
        </div>
        <!-- Konselor List -->
        <div
          id="konselor-div"
          class="list-konselor flex justify-between rounded-lg shadow-lg p-2"
        >
          <h4 class="text-xl font-bold">Profil Konselor Ahli</h4>
          <button id="down-konselor">
            <i class="ri-arrow-down-s-line text-3xl"></i>
          </button>
          <button id="up-konselor" class="hidden">
            <i class="ri-arrow-up-s-line text-3xl"></i>
          </button>
        </div>
        <div id="konselor" class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6">
            @forelse ($konselors as $konselor)
            <div class="shadow-xl rounded-md m-2">
                  <img
                    src="{{ asset('storage/' . $konselor->pic) }}"
                    alt="Foto {{ $konselor->nama }}"
                    class="w-full rounded-t-md"
                  />
                  <div class="py-3 px-5">
                    <h4 class="font-bold text-center">{{ $konselor->nama }}</h4>
                    <p class="text-gray-500 mb-2 text-center">{{ $konselor->role }}</p>
                  </div>
                </div>
            @empty
            <h4 class="text-lg">Tidak ada konselor</h4>
            @endforelse
        </div>

        <hr
          class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-40 dark:via-neutral-400"
        />

        <div class="konselor-sebaya">
          <!-- About Konselor -->
          <h3 class="font-bold text-center text-4xl mb-6 text-black">
            Konselor Sebaya
          </h3>
          <p class="text-justify mb-2">
            Selain konselor profesional, kami juga memiliki tim konselor
            sebaya, mahasiswa yang telah mendapatkan pelatihan khusus untuk
            memberikan dukungan kepada rekan-rekannya. Mereka hadir sebagai
            teman bicara yang memahami permasalahan mahasiswa dengan lebih
            dekat dan dapat membantu dalam menemukan solusi yang nyaman dan
            relevan.
          </p>
          <div>
            <p class="mb-2">
              <span class="font-bold">Pendekatan:</span> Supportif, nyaman,
              dan berbasis pengalaman sebaya
            </p>
            <p class="mb-2">
              <span class="font-bold">Peran:</span>
              Pendamping awal sebelum berkonsultasi lebih lanjut dengan
              konselor profesional
            </p>
            <p class="mb-2">
              <span class="font-bold"> Bidang Dukungan:</span> Stres akademik,
              pergaulan sosial, serta tantangan kehidupan kampus
            </p>
          </div>
        </div>
        <!-- Konselor List -->
        <div
          id="konselor-sebaya-div"
          class="list-konselor-sebaya flex justify-between rounded-lg shadow-lg p-2"
        >
          <h4 class="text-xl font-bold">Profil Konselor Sebaya</h4>
          <button id="down-konselor-sebaya">
            <i class="ri-arrow-down-s-line text-3xl"></i>
          </button>
          <button id="up-konselor-sebaya" class="hidden">
            <i class="ri-arrow-up-s-line text-3xl"></i>
          </button>
        </div>
        <div
          id="konselor-sebaya"
          class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6"
        >
        @forelse ($konselorSebaya as $konselor)
        <div class="shadow-xl rounded-md m-2">
              <img
                src="{{ asset('storage/' . $konselor->pic) }}"
                alt="Foto {{ $konselor->nama }}"
                class="w-full rounded-t-md"
              />
              <div class="py-3 px-5">
                <h4 class="font-bold text-center">{{ $konselor->nama }}</h4>
                <p class="text-gray-500 mb-2 text-center">{{ $konselor->role }}</p>
              </div>
            </div>
        @empty
        <h4 class="text-lg">Tidak ada konselor</h4>
        @endforelse
        </div>
      </div>
    </div>
  </section>
@endsection
