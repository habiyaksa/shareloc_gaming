<?php 
include 'includes/header.php';
include 'includes/sidebar.php'; 
?>


<main class="mt-14 md:ml-64 p-6 min-h-screen bg-gray-300 text-white transition-all">
  <div class="p-6">

  <!-- Cards -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

    <!-- Outlet -->
    <div class="bg-white rounded-2xl shadow p-6 border border-gray-100 transition-transform duration-300 hover:scale-105">
      <div class="flex items-center gap-4">
        <div class="bg-gray-200 p-4 rounded-xl shadow-inner">
          <i class="fa-solid fa-gamepad text-2xl text-gray-700"></i>
        </div>
        <div>
          <p class="text-gray-500 text-sm">Sewa</p>
          <p class="text-3xl font-bold text-gray-800">3</p>
        </div>
      </div>
    </div>

    <!-- Member -->
    <div class="bg-white rounded-2xl shadow p-6 border border-gray-100 transition-transform duration-300 hover:scale-105">
      <div class="flex items-center gap-4">
        <div class="bg-gray-200 p-4 rounded-xl shadow-inner">
          <i class="fa-solid fa-id-card text-2xl text-gray-700"></i>
        </div>
        <div>
          <p class="text-gray-500 text-sm">Member</p>
          <p class="text-3xl font-bold text-gray-800">5</p>
        </div>
      </div>
    </div>

    <!-- Transaksi -->
    <div class="bg-white rounded-2xl shadow p-6 border border-gray-100 transition-transform duration-300 hover:scale-105">
      <div class="flex items-center gap-4">
        <div class="bg-gray-200 p-4 rounded-xl shadow-inner">
          <i class="fa-solid fa-file-invoice-dollar text-2xl text-gray-700"></i>
        </div>
        <div>
          <p class="text-gray-500 text-sm">Transaksi</p>
          <p class="text-3xl font-bold text-gray-800">10</p>
        </div>
      </div>
    </div>

  </div>

  <!-- Chart -->
  <div class="bg-white p-6 rounded-2xl shadow border border-gray-100 transition-transform duration-300 hover:scale-105">

    <h2 class="text-lg font-semibold text-gray-800 mb-4">Jumlah Transaksi Perbulan</h2>

    <canvas id="salesChart" height="110"></canvas>

  </div>
</div>

</main>
<?php include 'includes/footer.php'; ?>
<script>
  const sidebar = document.getElementById('sidebar');
  const toggleSidebar = document.getElementById('toggleSidebar');

  toggleSidebar.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
  });
</script>

<!-- Chart Script -->
<script>
  const ctx = document.getElementById('salesChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
      datasets: [{
        label: 'Sales',
        data: [150, 380, 200, 290, 160, 180, 300, 120, 200, 350, 250, 110],
        backgroundColor: '#3b82f6',
        borderRadius: 6,
        barThickness: 25
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: { color: '#e5e7eb' }
        },
        x: {
          grid: { display: false }
        }
      }
    }
  });
</script>

