@extends('layout.app')
@section('title','Blog')
@section('content')
<section>
    <div class="bg-linear-to-bl from-primary-500 to-primary-800 py-20 pb-25">
      <div class="w-11/12 md:container mx-auto">
        <h3 class="text-5xl font-bold text-center mb-5 text-white">
          Artikel & Tips Kesehatan Mental
        </h3>
        <p class="text-gray-500 text-center mb-5">
          Jelajahi berbagai artikel informatif seputar kesehatan mental,
          pengelolaan stres, pengembangan diri, serta tips menjaga
          keseimbangan hidup. Temukan wawasan baru untuk mendukung
          kesejahteraanmu!
        </p>
      </div>
    </div>
    <div class="card bg-gray-100 w-full py-10 -mt-10 rounded-t-3xl">
      <div
        class="w-11/12 md:container md:w-6xl mx-auto flex flex-col gap-y-4"
      >
        <!-- Test-->
        @forelse ( $posts as $post )
        <div class="shadow-xl rounded-md flex flex-col md:flex-row">
            <a href="">
              <img
                src="{{ asset('storage/'.$post->thumbnail) }}"
                class="max-w-[200px] rounded-t-md bg-cover"
              />
              <div class="py-5 px-5 flex-col">
                <h4 class="font-bold text-2xl mb-5">
                  {{ $post->title }}
                </h4>
                <p class="text-gray-500 mb-2 text-justify">
                  {{ $post->excerpt }}
                </p>
                <a href="" class="hover:text-gray-500 text-justify align-bottom"
                  >Baca Selengkapnya</a
                >
              </div>
            </a>
          </div>
        @empty
            <h1>Belum ada postingan</h1>
        @endforelse

        <!-- service 2 -->
        <div class="shadow-xl rounded-md flex flex-col md:flex-row">
          <a href="">
            <img
              src="https://placehold.co/300x300"
              class="w-full rounded-t-md"
            />
            <div class="py-5 px-5 flex-col">
              <h4 class="font-bold text-2xl mb-5">
                Mengatasi Overthinking dan Kecemasan Berlebih
              </h4>
              <p class="text-gray-500 mb-2 text-justify">
                Pikiran yang terus-menerus mengkhawatirkan sesuatu bisa
                menguras energi. Pelajari teknik relaksasi dan strategi
                mengatasi overthinking agar lebih tenang...
              </p>
              <a href="" class="hover:text-gray-500 text-justify align-bottom"
                >Baca Selengkapnya</a
              >
            </div>
          </a>
        </div>


        <!-- pagination -->
        <ul
          class="flex flex-row flex-wrap gap-x-6 py-4 px-8 bg-white rounded-xl items-start w-fit mx-auto text-xl shadow-lg"
        >
          <li>
            <a href="" class="hover:text-gray-500"
              ><i class="ri-arrow-left-s-line"></i
            ></a>
          </li>
          <li>
            <a href="" class="hover:text-gray-500 font-semibold">1</a>
          </li>
          <li>
            <a href="" class="hover:text-gray-500">2</a>
          </li>
          <li>
            <a href="" class="hover:text-gray-500">3</a>
          </li>
          <li>
            <a href="" class="hover:text-gray-500">...</a>
          </li>
          <li>
            <a href="" class="hover:text-gray-500">12</a>
          </li>
          <li>
            <a href="" class="hover:text-gray-500"
              ><i class="ri-arrow-right-s-line"></i
            ></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
@endsection
