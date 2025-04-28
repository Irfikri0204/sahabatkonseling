<nav class="bg-primary-500 shadow-md sticky top-0 z-50">
    <div
      class="flex flex-wrap py-2 w-11/12 md:container mx-auto lg:space-x-4 justify-between"
    >
      <!-- brand -->
      <a
        href="/"
        class="inline-flex py-2 text-xl font-bold tracking-wider text-white"
      >
        Sahabat Konseling
      </a>

      <!-- toggler btn -->
      <button
        id="navbarToggler"
        class="inline-flex items-center justify-center w-10 h-10 ml-auto text-white border rounded-md outline-none lg:hidden focus:outline-none"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="w-6 h-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>

      <!-- menu -->
      <div
        id="navbarMenu"
        class="w-full mt-2 hidden lg:flex lg:w-auto lg:mt-0"
      >
        <ul
          class="flex flex-col w-full space-y-2 lg:w-auto lg:flex-row lg:space-y-0 lg:space-x-2"
        >
          <li>
            <a
              href="/"
              class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-primary-600 {{ Request::is('/') ? 'bg-primary-700' : '' }}"
              >Beranda</a
            >
          </li>
          <li>
            <a
              href="/layanan"
              class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-primary-600 {{ Request::is('layanan') ? 'bg-primary-700' : '' }}"
              >Layanan</a
            >
          </li>
          <li>
            <a
              href="/cekjadwal"
              class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-primary-600"
              >Cek Jadwal</a
            >
          </li>
          <li>
            <a
              href="/asesmen"
              class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-primary-600"
              >Asesmen</a
            >
          </li>
          <li>
            <a
              href="{{ route('post.index') }}"
              class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-primary-600  {{ (Request::is('post')|| Request::is('post*')) ? 'bg-primary-700' : '' }}">Postingan</a>
          </li>

          <!-- dropdown -->
          <li class="relative">
            <button
              id="dropdownButton"
              class="flex w-full px-4 py-2 font-medium text-white rounded-md outline-none hover:bg-primary-600 {{ Request::is('about*') ? 'bg-primary-700' : '' }}">
              Tentang Kami
            </button>
            <!-- dropdown menu -->
            <div
              id="dropdownMenu"
              class="lg:absolute relative right-0 p-2 mt-1 bg-primary-100 rounded-md shadow lg:w-48 hidden"
            >
              <ul class="space-y-2">
                <li>
                  <a
                    href="{{ route('konselor.index') }}"
                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black"
                    >Tim Konselor</a
                  >
                </li>
                <li>
                  <a
                    href="/about/pengembang"
                    class="flex p-2 font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-black"
                    >Tim Pengembang</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <!-- dropdown -->

          <li>
            <a
              href="/admin"
              class="flex px-4 py-2 font-medium text-white rounded-md hover:bg-primary-700 md:border-2 lg:border-secondary-500 lg:py-2 lg:px-3 lg:rounded-md lg:hover:bg-secondary-500"
              >Login</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
