
<?php include 'includes/header.php'; ?>
  <!-- Main Content -->
  <main class="flex-grow py-16 bg-gray-950">
<section class=" flex justify-center items-center h-screen w-full bg-[url('assets/img/bghero.png')] bg-cover bg-center bg-[#27374D]/60 bg-blend-multiply">
  <div class="text-center">
    <h1 class="text-2xl md:text-7xl font-extrabold text-white drop-shadow-lg animate__animated animate__fadeInDown">
      Shareloc <span class="text-red-700">PlayStation</span>
    </h1>
    <p class="mt-4 text-lg md:text-2xl text-gray-200 " id="typing">
        Sewa PS3 & PS 4 Terbaik di kota Tulungagung
      </p>
  </div>
</section>


<section>
    <div class="bg-[#1a202c] pt-16">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-extrabold mb-12">Kenapa Harus Bermain di Shareloc Gaming?</h2>
        <p class="text-lg mb-8">Kami menawarkan pengalaman bermain PlayStation terbaik dengan harga terjangkau dan fasilitas lengkap.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <i class="fa-solid fa-gamepad text-4xl mb-4 text-blue-500"></i>
            <h3 class="text-2xl font-semibold mb-2">Koleksi Game Lengkap</h3>
            <p>Kami memiliki berbagai pilihan game terbaru dan populer untuk PS3 dan PS4.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <i class="fa-solid fa-chair text-4xl mb-4 text-green-500"></i>
            <h3 class="text-2xl font-semibold mb-2">Tempat Nyaman</h3>
            <p>Ruang bermain kami dirancang untuk kenyamanan maksimal selama sesi gaming Anda.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <i class="fa-solid fa-wallet text-4xl mb-4 text-yellow-500"></i>
            <h3 class="text-2xl font-semibold mb-2">Harga Terjangkau</h3>
            <p>Kami menawarkan paket sewa yang kompetitif tanpa mengorbankan kualitas layanan.</p>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1440 320"><path fill="#1a202c" fill-opacity="1" d="M0,160L1440,128L1440,0L0,0Z"></path></svg>
</section>

<section id="fasilitas">
  <div class="container mx-auto pb-16">
  <div class="flex flex-col  lg:justify-around lg:flex-row">
    <div class="flex justify-center items-center">
<h1 class="text-4xl md:text-5xl font-extrabold">Fasilitas Kami</h1>
    </div>

    <div class="mt-6 mr-40 m">
      <ul class="space-y-5 md:text-left text-2xl">
        <li><i class="fa-solid fa-mosque text-3xl mr-3"></i > mushola</li>
        <li><i class="fa-solid fa-wifi text-3xl mr-3"></i> Free Wifi</li>
        <li><i class="fa-solid fa-toilet text-3xl mr-5"></i> Toilet</li>
        <li><i class="fa-solid fa-house text-3xl mr-3"></i> tempat nyaman</li>
      </ul>
    </div>
  </div>
  </div>
</section>

<section id="review" class="bg-[#010f40]">
  <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1440 320"><path fill="#black" fill-opacity="1" d="M0,160L1440,128L1440,0L0,0Z"></path></svg>
  <div class="container mx-auto px-4 pb-10">
    <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-600 mb-8">Review <span class="text-white">Pelanggan</span></h2>
    
    <div class="overflow-hidden pause-on-hover p-8">
      <div class="flex gap-6 animate-marquee">
        <?php
        include 'koneksi.php';
        $query = "SELECT nama, review FROM pelanggan";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
          $nama = htmlspecialchars($row['nama']);
          $review = htmlspecialchars($row['review']);

          echo '
            <div class="flex-none w-64 bg-indigo-600 text-white rounded-xl shadow-lg p-4 flex flex-col items-center justify-between hover:scale-105 transition-transform duration-300">
              <h3 class="font-semibold text-lg">' . $nama . '</h3>
              <p class="text-sm text-center text-gray-100 italic mt-2">"' . $review . '"</p>
            </div>';
        }

        $stmt->close();
        ?>
      </div>
    </div>
  </div>
</section>
  </main>
<?php include 'includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>
</html>
