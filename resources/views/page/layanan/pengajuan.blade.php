<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Konseling</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      * {
        font-family: "Inter", sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
      <div class="container mx-auto p-4">
        <div
          class="bg-white rounded-lg shadow-lg p-6 md:p-10 max-w-3xl mx-auto"
        >
          <h1 class="text-3xl font-bold text-center mb-8">
            Form Pengajuan Konseling
          </h1>

          <!-- Progress Bar -->
          <div class="mb-8">
            <div class="flex justify-between mb-2">
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-primary-600 bg-primary-200"
                id="step1"
              >
                Data Diri
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-primary-600 bg-primary-200 opacity-50"
                id="step2"
              >
                Detail Masalah
              </span>
              <span
                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-primary-600 bg-primary-200 opacity-50"
                id="step3"
              >
                Jadwal Konseling
              </span>
            </div>
            <div
              class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-primary-200"
            >
              <div
                id="progress-bar"
                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500 w-1/3 transition-all duration-500 ease-in-out"
              ></div>
            </div>
          </div>

          <!-- Form Steps -->
          <form id="multi-step-form" action="{{ route('pengajuan-konseling.store') }}" method="POST">
            <!-- Step 1: Personal Information -->
            @csrf
            <div id="step-1" class="step">
              <div class="mb-6">
                <label
                  for="nama"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Nama Lengkap</label
                >
                <input
                  type="text"
                  placeholder="ex: John Doe"
                  id="nama"
                  name="nama"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>
              <div class="mb-6">
                <label
                  for="nim"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >NIM</label
                >
                <input
                  type="text"
                  inputmode="numeric"
                  id="nim"
                  name="nim"
                  placeholder="Masukkan NIM Anda"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>
              <div class="mb-6">
                <label
                  for="usia"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Usia</label
                >
                <input
                  type="number"
                  id="usia"
                  min="0"
                  name="usia"
                  placeholder="Masukkan Usia Anda"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>

              <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900"
                  >Jenis Kelamin</label
                >
                <div class="flex items-center mb-4">
                  <input
                    id="lakilaki"
                    type="radio"
                    name="jenis_kelamin"
                    value="Laki-laki"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300"
                  />
                  <label
                    for="lakilaki"
                    class="ml-2 text-sm font-medium text-gray-900"
                    >Laki-Laki</label
                  >
                </div>
                <div class="flex items-center">
                  <input
                    id="perempuan"
                    type="radio"
                    name="jenis_kelamin"
                    value="Perempuan"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300"
                  />
                  <label
                    for="perempuan"
                    class="ml-2 text-sm font-medium text-gray-900"
                    >Perempuan</label
                  >
                </div>
              </div>

              <div class="mb-6">
                <label
                  for="jurusan"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Jurusan</label
                >
                <select
                  id="jurusan"
                  name="jurusan"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                >
                  <option value="JTIK">JTIK</option>
                  <option value="JPTE">JPTE</option>
                  <option value="JPKK">JPKK</option>
                  <option value="JPTSP">JPTSP</option>
                  <option value="JTP">JTP</option>
                  <option value="JPTM">JPTM</option>
                  <option value="JPTO">JPTO</option>
                  <option value="JPTA">JPTA</option>
                </select>
              </div>

              <div class="mb-6">
                <label
                  for="prodi"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Program Studi</label
                >
                <input
                  type="text"
                  id="prodi"
                  name="prodi"
                  placeholder="ex: Pendidikan Teknik Informatika dan Komputer"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>

              <div class="mb-6">
                <label
                  for="semester"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Semester</label
                >
                <input
                  type="number"
                  min="1"
                  name="semester"
                  max="14"
                  id="semester"
                  placeholder="ex: 8"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>

              <div class="mb-6">
                <label
                  for="no_telp"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Nomor Telepon</label
                >
                <input
                  type="tel"
                  id="no_telp"
                  name="no_telp"
                  placeholder="ex: 08123456789"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>
            </div>

            <!-- Step 2: Account Details -->
            <div id="step-2" class="step hidden">
              <div class="mb-6">
                <label
                  for="kategori_masalah"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Kategori Masalah</label
                >
                <select
                  id="kategori_masalah"
                  name="kategori_masalah"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                >
                  <option value="Akademik">Akademik</option>
                  <option value="Karir">Karir</option>
                  <option value="Sosial">Sosial</option>
                  <option value="Pribadi">Pribadi</option>
                </select>
              </div>
              <div class="mb-6">
                <label
                  for="deskripsi_masalah"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Deskripsi Masalah</label
                >
                <textarea
                  id="deskripsi_masalah"
                  name="deskripsi_masalah"
                  oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 h-auto"
                  required
                ></textarea>
              </div>
              <div class="mb-6">
                <label
                  for="sejak_kapan"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Mulai Kapan Masalah Dialami</label
                >
                <textarea
                  id="sejak_kapan"
                  name="sejak_kapan"
                  oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 h-auto"
                  required
                ></textarea>
              </div>
              <div class="mb-6">
                <label
                  for="tindakan_yang_dilakukan"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Tindakan Yang Dilakukan</label
                >
                <textarea
                  id="tindakan_yang_dilakukan"
                  name="tindakan_yang_dilakukan"
                  oninput="this.style.height = 'auto'; this.style.height = (this.scrollHeight) + 'px';"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 h-auto"
                  required
                ></textarea>
              </div>
            </div>

            <!-- Step 3: Preferences -->
            <div id="step-3" class="step hidden">
              <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900"
                  >Pilih Jenis Layanan</label
                >
                <div class="flex items-center mb-4">
                  <input
                    id="layanan-offline"
                    type="radio"
                    name="jenis_layanan"
                    value="Offline"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300"
                  />
                  <label
                    for="layanan-offline"
                    class="ml-2 text-sm font-medium text-gray-900"
                    >Offline</label
                  >
                </div>
                <div class="flex items-center">
                  <input
                    id="layanan-online"
                    type="radio"
                    name="jenis_layanan"
                    value="Online"
                    class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300"
                  />
                  <label
                    for="layanan-online"
                    class="ml-2 text-sm font-medium text-gray-900"
                    >Online</label
                  >
                </div>
              </div>
              <div class="mb-6">
                <label
                  for="tanggal"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Tanggal Pengajuan (Minimal 3 Hari Setelah Pengajuan)</label
                >
                <input
                  type="date"
                  name="tanggal"
                  id="tanggal"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                />
              </div>
              <div class="mb-6">
                <label
                  for="sesi"
                  class="block mb-2 text-sm font-medium text-gray-900"
                  >Sesi Konseling</label
                >
                <select
                  id="sesi"
                  name="sesi"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                  required
                >
                  <option value="Pagi">Pagi (10.00 WITA)</option>
                  <option value="Siang">Siang (14.00 WITA)</option>
                </select>
              </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-8">
              <button
                type="button"
                id="prevBtn"
                class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 focus:outline-none focus:shadow-outline hidden"
              >
                Previous
              </button>
              <button
                type="button"
                id="nextBtn"
                class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 focus:outline-none focus:shadow-outline"
              >
                Next
              </button>
              <button
                type="submit"
                id="submitBtn"
                class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 focus:outline-none focus:shadow-outline hidden"
              >
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
        let currentStep = 1;
        const form = document.getElementById("multi-step-form");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const submitBtn = document.getElementById("submitBtn");
        const progressBar = document.getElementById("progress-bar");

        function showStep(step) {
          document.querySelectorAll(".step").forEach((s, index) => {
            s.classList.toggle("hidden", index !== step - 1);
          });

          // Tampilkan/sembunyikan tombol navigasi
          prevBtn.classList.toggle("hidden", step === 1);
          nextBtn.classList.toggle("hidden", step === 3);
          submitBtn.classList.toggle("hidden", step !== 3);

          // Progress Bar
          progressBar.style.width = `${(step / 3) * 100}%`;

          // Highlight teks step
          document.getElementById("step1").style.opacity = step >= 1 ? "1" : "0.5";
          document.getElementById("step2").style.opacity = step >= 2 ? "1" : "0.5";
          document.getElementById("step3").style.opacity = step === 3 ? "1" : "0.5";
        }

        nextBtn.addEventListener("click", () => {
          if (currentStep < 3) {
            currentStep++;
            showStep(currentStep);
          }
        });

        prevBtn.addEventListener("click", () => {
          if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
          }
        });

        // Inisialisasi
        showStep(currentStep);

        // Validasi tanggal minimal 3 hari ke depan
        const tanggalInput = document.getElementById("tanggal");
        const today = new Date();
        const minDate = new Date(today.setDate(today.getDate() + 3))
          .toISOString()
          .split("T")[0];
        tanggalInput.setAttribute("min", minDate);
      </script>

  </body>
</html>
