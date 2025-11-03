<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sewa PS - Shareloc Gaming</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- link css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="flex flex-col min-h-screen bg-gray-950 text-white">
  <!-- Header -->
  <header class="bg-gray-900/90 backdrop-blur-md text-white fixed top-0 left-0 w-full z-50 shadow-lg">
  <div class="flex justify-between items-center px-4 py-3">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="../assets/img/shareloc_gaming_logo.jpg" alt="Shareloc Gaming"
           class="w-10 h-10 rounded-md object-cover border border-gray-600">
      <h1 class="text-xl md:text-2xl font-bold tracking-tight">Shareloc Gaming</h1>
    </div>

    <!-- Tombol Sidebar (mobile) -->
    <button id="toggleSidebar"
            class="text-white text-2xl md:hidden focus:outline-none">
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Navbar kanan -->
    <nav class="hidden md:flex items-center space-x-3 text-lg">
      <i class="fa-solid fa-user text-2xl"></i>
      <span>Admin</span>
    </nav>

  </div>
</header>
