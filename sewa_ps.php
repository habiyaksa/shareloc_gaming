<?php
include 'includes/header.php';
?>
<main class="py-22">
    <section id="hero-section " class="relative flex justify-center items-center w-full h-screen ">
  <!-- Video Background -->
  <video autoplay muted loop class="absolute w-full h-full object-cover">
    <source src="assets/video/opening.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="absolute z-10 top-0 left-0 w-full h-full bg-black opacity-50"></div>
  <div class="absolute z-20 text-indigo-400 text-opacity-50 text-center ">
    <h1 class="text-2xl md:text-5xl lg:text-6xl font-bold ">halaman sewa PlayBox</h1>
  </div>
</section>

<!-- syarat dan ketentuan sewa -->
<section id="informasi-playbox" class="py-16">
  <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">
    Syarat dan Ketentuan Sewa
  </h2>
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="flex items-start bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <i class="fa-solid fa-calendar-days text-indigo-500 text-3xl mr-4 mt-1"></i>
        <p class="text-gray-700">Masa sewa minimal <span class="font-semibold">3 hari</span> dan maksimal <span class="font-semibold">30 hari</span>.</p>
      </div>
      <div class="flex items-start bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <i class="fa-solid fa-credit-card text-indigo-500 text-3xl mr-4 mt-1"></i>
        <p class="text-gray-700">Pembayaran dilakukan <span class="font-semibold">sebelum pengiriman</span> PlayBox.</p>
      </div>
      <div class="flex items-start bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <i class="fa-solid fa-broom text-indigo-500 text-3xl mr-4 mt-1"></i>
        <p class="text-gray-700">Mainan harus dikembalikan dalam kondisi <span class="font-semibold">bersih dan lengkap</span>.</p>
      </div>
      <div class="flex items-start bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <i class="fa-solid fa-triangle-exclamation text-indigo-500 text-3xl mr-4 mt-1"></i>
        <p class="text-gray-700">Jika terjadi kerusakan, biaya perbaikan atau penggantian menjadi <span class="font-semibold">tanggung jawab penyewa</span>.</p>
      </div>
      <div class="flex items-start bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <i class="fa-solid fa-house text-indigo-500 text-3xl mr-4 mt-1"></i>
        <p class="text-gray-700">PlayBox hanya dapat digunakan untuk <span class="font-semibold">penggunaan pribadi</span> dan bukan untuk disewakan kembali.</p>
      </div>
      <div class="flex items-start bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
        <i class="fa-solid fa-handshake text-indigo-500 text-3xl mr-4 mt-1"></i>
        <p class="text-gray-700">Sewa dianggap sah setelah konfirmasi pembayaran dan persetujuan syarat & ketentuan.</p>
      </div>
    </div>
  </div>
</section>

<section id="informasi-playbox" class="py-16 bg-gray-900">
  <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">
    Pertanyaan yang Sering Diajukan
  </h2>
  <div class="container mx-auto px-4 space-y-4">
    <div class="bg-blue-950 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold">Apasih Keuntungan Menyewa Playbox?</h3>
      <p class="mt-2">Keuntungannya anda dapat bermain dimanapun dan kapanpun seharian</p>
    </div>
    <div class="bg-blue-950 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold">Apa saja yang di dapat?</h3>
      <p class="  mt-2">Monitor 25 inc, speaker, stik 2 original, dan tentunya PS3, Box</p>
</div>
    <div class="bg-blue-950 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold">Kenapa Menyewa PlayBox Adalah Pilihan Tepat?</h3>
      <p class=" mt-2">Lebih praktis dan hemat dibanding anda membeli PS jika hanya ingin bermain saat weekend</p>
    </div>
    <div class="bg-blue-950 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold">Apakah banyak yang Menyewa Playbox?</h3>
      <p class="mt-2">Banyak sekali, orang biasanya menyewa untuk dijadikan turnamen PS atau dibawa dirumahnya</p>
    </div>
      <div class="bg-blue-950 p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold">apakah ada jaminan dan denda jika rusak saat disewa?</h3>
      <p class=" mt-2">tentu ada ya Teman teman, jadi sebelum anda menyewa Ada informasi mengenai ketentuan Sewa</p>
    </div>
     </div>
</section>


</main>
<?php
include 'includes/footer.php';
?>