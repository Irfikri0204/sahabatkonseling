document.addEventListener("DOMContentLoaded", function () {
    function setupToggle(toggleId, contentId, downBtnId, upBtnId) {
      const toggleDiv = document.getElementById(toggleId);
      const contentDiv = document.getElementById(contentId);
      const downButton = document.getElementById(downBtnId);
      const upButton = document.getElementById(upBtnId);
  
      // Atur efek transisi awal
      contentDiv.style.transition =
        "max-height 0.4s ease-in-out, opacity 0.4s ease-in-out";
      contentDiv.style.maxHeight = "0px";
      contentDiv.style.opacity = "0";
      contentDiv.style.overflow = "hidden";
  
      // Fungsi untuk menampilkan daftar
      function showContent() {
        contentDiv.style.maxHeight = contentDiv.scrollHeight + "px";
        contentDiv.style.opacity = "1";
        downButton.classList.add("hidden");
        upButton.classList.remove("hidden");
      }
  
      // Fungsi untuk menyembunyikan daftar
      function hideContent() {
        contentDiv.style.maxHeight = "0px";
        contentDiv.style.opacity = "0";
        upButton.classList.add("hidden");
        downButton.classList.remove("hidden");
      }
  
      // Event listener untuk membuka/tutup daftar saat tombol diklik
      toggleDiv.addEventListener("click", function () {
        if (
          contentDiv.style.maxHeight === "0px" ||
          contentDiv.style.maxHeight === ""
        ) {
          showContent();
        } else {
          hideContent();
        }
      });
    }
  
    // Setup toggle untuk Konselor Ahli
    setupToggle("konselor-div", "konselor", "down-konselor", "up-konselor");
  
    // Setup toggle untuk Konselor Sebaya
    setupToggle(
      "konselor-sebaya-div",
      "konselor-sebaya",
      "down-konselor-sebaya",
      "up-konselor-sebaya"
    );
  });
  