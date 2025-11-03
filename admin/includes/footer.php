<!-- Footer di bawah konten utama (sejajar sidebar) -->
<footer class="bg-gray-900 text-gray-300 text-sm px-6 py-3 flex justify-between items-center shadow-inner ml-64 h-16">
  <p>Admin Interface © <span id="year2"></span> Shareloc Gaming</p>
  <div class="flex space-x-4">
    <a href="#" class="hover:text-green-400 transition"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#" class="hover:text-green-400 transition"><i class="fa-brands fa-instagram"></i></a>
    <a href="#" class="hover:text-green-400 transition"><i class="fa-brands fa-x-twitter"></i></a>
  </div>
</footer>

<script>
  document.getElementById("year2").textContent = new Date().getFullYear();
</script>
