
<?php include 'includes/header.php'; ?>
  <!-- Main Content -->
  <main class="flex-grow py-16 bg-black ">
<section class=" flex justify-center items-center h-screen w-full bg-[url('assets/img/bgheroberanda.png')] bg-cover bg-center bg-[#27374D]/60 bg-blend-multiply">
  <div class="text-center">
    <h1 class="text-2xl md:text-7xl font-extrabold text-white drop-shadow-lg animate__animated animate__fadeInDown">
      Shareloc <span class="text-red-700">PlayStation</span>
    </h1>
    <p class="mt-4 text-lg md:text-2xl text-gray-200 " id="typing">
        Sewa PS3 & PS 4 Terbaik di kota Tulungagung
      </p>
  </div>
</section>


<section class="container mx-auto py-16">
      <div class="lg:mx-14 px-6 text-center bg-black py-16">
        <h2 class="text-4xl font-extrabold mb-12"><span class="text-red-600">Kenapa</span> Harus Bermain di Shareloc Gaming?</h2>
        <p class="text-lg mb-8">Kami menawarkan pengalaman bermain PlayStation terbaik dengan harga terjangkau dan fasilitas lengkap.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:translate-y-[-8px] transition-transform">
            <i class="fa-solid fa-gamepad text-4xl mb-4 text-blue-500"></i>
            <h3 class="text-2xl font-semibold mb-2">Koleksi Game Lengkap</h3>
            <p>Kami memiliki berbagai pilihan game terbaru dan populer untuk PS3 dan PS4.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:translate-y-[-8px] transition-transform">
            <i class="fa-solid fa-chair text-4xl mb-4 text-green-500 "></i>
            <h3 class="text-2xl font-semibold mb-2">Tempat Nyaman</h3>
            <p>Ruang bermain kami dirancang untuk kenyamanan maksimal selama sesi gaming Anda.</p>
          </div>
          <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:translate-y-[-8px] transition-transform">
            <i class="fa-solid fa-wallet text-4xl mb-4 text-yellow-500"></i>
            <h3 class="text-2xl font-semibold mb-2">Harga Terjangkau</h3>
            <p>Kami menawarkan paket sewa yang kompetitif tanpa mengorbankan kualitas layanan.</p>
          </div>
        </div>
      </div>

</section>

<!-- detail unit yang kami miliki -->
<section class="container mx-auto px-6 py-16 bg-gray-900">
  <div class="lg:mx-16">
    <h2 class="text-3xl font-bold text-center mb-8 text-white">🎮 Detail Unit PS Kami</h2>
    <p class="text-gray-400 text-center mb-12">
      Kami selalu menjaga kualitas setiap unit agar kamu bisa bermain dengan nyaman dan puas. 
      Berikut fasilitas yang tersedia di setiap set PlayStation kami:
    </p>

    <!-- Grid utama -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      
      <!-- TV -->
      <div class="flex flex-col items-center text-center bg-gray-950 border border-blue-200 p-6 rounded-xl shadow-lg hover:scale-105 transition">
        <img src="assets/img/tv.png" alt="TV Gaming" class="w-24 mb-4">
        <h3 class="text-xl font-semibold mb-2 text-white">TV Berkualitas Tinggi</h3>
        <p class="text-gray-400">
          Smart TV LED 43 inci dengan resolusi Full HD hingga 4K Ultra HD. 
          Gambar jernih, warna tajam, dan mode game aktif untuk pengalaman bermain tanpa delay.
        </p>
      </div>

      <!-- Konsol -->
      <div class="flex flex-col items-center text-center bg-gray-950 border border-blue-200 p-6 rounded-xl shadow-lg hover:scale-105 transition">
        <img src="assets/img/ps.png" alt="Konsol PS" class="w-24 mb-8">
        <h3 class="text-xl font-semibold mb-2 text-white">Konsol PlayStation Original</h3>
        <p class="text-gray-400">
          Menggunakan PS3 dan PS4 original dengan sistem selalu diperbarui. 
          Game populer dan terupdate seperti eFootball, GTA V, FIFA, Tekken, dan banyak lainnya siap dimainkan!
        </p>
      </div>

      <!-- Stik -->
      <div class="flex flex-col items-center text-center bg-gray-950 border border-blue-200 p-6 rounded-xl shadow-lg hover:scale-105 transition">
        <img src="assets/img/stik.png" alt="Stik PS" class="w-24 mb-8">
        <h3 class="text-xl font-semibold mb-2 text-white">Stik Nyaman & Responsif</h3>
        <p class="text-gray-400">
          Responsif, nyaman digenggam, dan selalu siap pakai berkat charging dock yang disediakan.
        </p>
      </div>

      <!-- Audio -->
      <div class="flex flex-col items-center text-center bg-gray-950 border border-blue-200 p-6 rounded-xl shadow-lg hover:scale-105 transition">
        <img src="assets/video/Sound Waves.gif" alt="Sound Waves" class="w-24 mb-4">
        <h3 class="text-xl font-semibold mb-2 text-white">Audio</h3>
        <p class="text-gray-400">
          Suara jernih, membuat pengalaman bermain makin seru.
        </p>
      </div>

      <!-- Tambahan: Swiper -->
      <div class="flex flex-col items-center text-center bg-gray-950 p-6 rounded-xl shadow-lg transition md:col-span-2 relative">
        <div class="swiper mySwiper w-full h-80 sm:h-96 rounded-lg overflow-hidden ">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-[url('assets/img/fotoruangan2.jpg')] bg-cover bg-center"></div>
            <div class="swiper-slide bg-[url('assets/img/fotoruangan3.jpg')] bg-cover bg-center"></div>
            <div class="swiper-slide bg-[url('assets/img/fotoruangan1.jpg')] bg-cover bg-center"></div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 bg-gray-900/60 backdrop-blur-sm text-white p-4 rounded-lg w-[90%] z-10">
          <h3 class="text-xl font-semibold mb-2">🪑 Kenyamanan</h3>
          <p class="text-gray-300 text-sm">
            Area bermain bersih membuat kamu betah bermain berjam-jam.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- informasi harga -->
<section class="bg-gray-950 text-white py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-6">💸 Harga Sewa PS</h2>
    <p class="text-gray-400 text-center mb-12">Pilih paket sesuai kebutuhanmu — dari santai sampai maraton main seharian!</p>

    <!-- Grid Utama -->
    <div class="grid md:grid-cols-2 gap-6">
      
      <!-- Kotak besar di kiri -->
      <div class="bg-gray-900 hover:bg-gray-950 p-8 rounded-xl shadow-lg flex flex-col justify-center items-center text-center hover:scale-105 transition border border-blue-200 border-1">
        <h3 class="text-2xl font-semibold mb-3">EKSLUSIF PLAYBOX</h3>
        <p class="text-gray-400 mb-4">Rasakan sensasi baru bermain PS, <span class="text-red-500">Sewa Playbox sekarang anda bisa mainkan dimanapun dan kapanpun</span></p>
        <a href="sewa_ps.php" class="inline-block border border-1 border-red-800 w-40 p-2 rounded-lg hover:bg-red-700">Sewa Sekarang</a>
      </div>

      <!-- Dua kotak kecil di kanan -->
      <div class="grid gap-6">
        <!-- Kotak kecil atas -->
        <div class="bg-gray-900 hover:bg-gray-950 p-6 rounded-xl shadow-lg text-center hover:scale-105 transition border border-blue-200 border-1">
          <h3 class="text-xl font-semibold mb-2">PS3</h3>
          <p class="text-gray-400 mb-3">"TV 43", DualShock, PS lancar</p>
          <p class="text-3xl font-bold mb-3">Rp 4.000<span class="text-sm"> / jam</span></p>
        </div>

        <!-- Kotak kecil bawah -->
        <div class="bg-gray-900 hover:bg-gray-950 p-6 rounded-xl shadow-lg text-center hover:scale-105 transition border border-blue-200 border-1">
          <h3 class="text-xl font-semibold mb-2">PS4 </h3>
          <p class="text-gray-400 mb-3">"TV 43", Stik Original, Game Populer</p>
          <p class="text-3xl font-bold mb-3">Rp 6.000<span class="text-sm"> / jam</span></p>
        </div>

        <div class="bg-gray-900 hover:bg-gray-950 p-6 rounded-xl shadow-lg text-center hover:scale-105 transition border border-blue-200 border-1">
          <h3 class="text-xl font-semibold mb-2">PlayBox</h3>
          <p class="text-gray-400 mb-3">"Monitor 24 inc", Stik original, suara jernih</p>
          <p class="text-3xl font-bold mb-3">Rp 6.000<span class="text-sm"> / jam</span></p>
        </div>
      </div>
    </div>
  </div>
</section>
     
 <!-- bagian untuk menawarkan ke halaman daftar member -->
<section>
  <div class="container mx-auto px-6 py-16 bg-gray-900 text-center rounded-lg">
    <h2 class="text-3xl font-bold mb-4 text-white">Bergabunglah sebagai Member PlayStation Kami!</h2>
    <p class="text-gray-400 mb-8">Daftar sekarang untuk mendapatkan kode aktivasi eksklusif dan nikmati berbagai keuntungan sebagai member resmi kami.</p>
    <a href="form_member.php" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">Daftar Member Sekarang</a>
  </div>
</section>

<section id="fasilitas" class="bg-[#010f40]">
  <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1440 120"><path fill="#030712" fill-opacity="1" d="M0,80L1440,64L1440,0L0,0Z"></path></svg>
  <div class="container mx-auto">
  <div class="flex flex-col justify-center items-center lg:justify-around lg:flex-row">
    <div class="flex justify-center items-center">
<h1 class="text-4xl md:text-5xl font-extrabold">Fasilitas Kami</h1>
    </div>

    <div class="flex flex-col justify-center items-center mt-10 ">
      <ul class="space-y-5 md:text-left text-2xl ">
        <li><i class="fa-solid fa-mosque text-3xl mr-3"></i > mushola</li>
        <li><i class="fa-solid fa-wifi text-3xl mr-3"></i> Free Wifi</li>
        <li><i class="fa-solid fa-toilet text-3xl mr-5"></i> Toilet</li>
        <li><i class="fa-solid fa-house text-3xl mr-3"></i> Parkiran Luas</li>
      </ul>
    </div>
  </div>
  </div>
</section>
 <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1440 120"><path fill="#010f40" fill-opacity="1" d="M0,80L1440,64L1440,0L0,0Z"></path></svg>
<section id="review" class= "py-16">
  <div class="container mx-auto px-4 ">
    <h2 class="text-4xl md:text-5xl font-extrabold text-center text-blue-600 mb-8">Review <span class="text-white">Pelanggan</span></h2>
    
    <div class="overflow-hidden pause-on-hover p-8">
      <div class="flex gap-10 animate-marquee">
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
            <div class="flex-none w-80 h-48 bg-indigo-600 text-white rounded-xl shadow-lg p-4 flex flex-col items-center justify-between hover:scale-105 transition-transform duration-300">
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
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
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
