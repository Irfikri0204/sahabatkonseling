<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Konseling Berhasil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      * {
        font-family: "Inter", sans-serif;
      }
    </style>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
  />
  </head>
  <body>
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="container mx-auto p-4">
            <div
          class="bg-white rounded-lg shadow-lg p-6 md:p-10 max-w-3xl mx-auto"
        >
          <h2 class="text-2xl font-bold text-center mb-4">
            Konseling Berhasil Diajukan
          </h2>
          <div class="text-center my-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-1/3 mx-auto"><path d="M4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12ZM12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM17.4571 9.45711L16.0429 8.04289L11 13.0858L8.20711 10.2929L6.79289 11.7071L11 15.9142L17.4571 9.45711Z" class="text-green-500"></path></svg>
          </div>
          <h1 class="text-3xl font-bold text-center mb-8">
            Kode Konseling: {{ $pengajuan->kode_konseling }}
          </h1>
          <a href="cekjadwal.html" class="bg-primary-500 hover:bg-primary-600 border border-gray-300 text-white text-sm font-semibold text-center rounded-lg block w-full p-2.5 mb-3">Cek Status Pengajuan</a>
        </div>
    </div>
  </body>
</html>
