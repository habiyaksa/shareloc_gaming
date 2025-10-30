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
</head>

<body class="flex flex-col min-h-screen bg-gray-950 text-white">
  <!-- Header -->
  <header class="bg-gray-900/90 backdrop-blur-md text-white fixed w-full z-50 shadow-lg">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center gap-3">
        <img src="assets/img/shareloc_gaming_logo.jpg" alt="Shareloc Gaming" class="w-12 h-12 rounded-md object-cover border border-gray-600">
        <h1 class="text-xl md:text-2xl font-bold tracking-tight">Shareloc Gaming</h1>
      </div>

      <!-- Hamburger -->
      <div id="menu-icon" class="lg:hidden cursor-pointer">
        <i class="fas fa-bars text-2xl" id="hamburger-icon"></i>
        <i class="fa-solid fa-x hidden" id="silang-icon"></i>
      </div>

      <!-- Navbar -->
      <nav id="nav-menu" class="hidden lg:flex lg:space-x-4 text-lg">
        <ul class="lg:flex lg:space-x-4 text-lg">
        <li><a href="#" class="hover:text-blue-400 transition-colors">Beranda</a></li>
        <li><a href="#" class="hover:text-blue-400 transition-colors">Daftar Member</a></li>
        <li><a href="#" class="hover:text-blue-400 transition-colors">Sewa Playbox</a></li>
        <li><a href="#" class="hover:text-blue-400 transition-colors">lokasi</a></li>
        <li><a href="#" class="hover:text-blue-400 transition-colors">Kontak</a></li>
        </ul>
      </nav>
    </div>
  </header>
