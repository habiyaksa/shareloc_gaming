<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="sidebar"
  class="fixed top-14 left-0 z-40 w-64 h-[calc(100vh-3.5rem)] transition-transform -translate-x-full md:translate-x-0 bg-gray-800 text-gray-100 overflow-y-auto shadow-lg">

  <ul class="space-y-2 font-medium p-4">
    <li>
      <a href="index.php" class="flex items-center p-2 rounded-lg hover:bg-gray-700
      <?php echo ($current_page == 'index.php') ? 'bg-gray-700 text-white' : ''; ?>">
        <i class="fa-solid fa-house w-5 h-5 text-gray-400"></i>
        <span class="ml-3">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="kelola_member.php" class="flex items-center p-2 rounded-lg hover:bg-gray-700
      <?php echo ($current_page == 'kelola_member.php') ? 'bg-gray-700 text-white' : ''; ?>">
        <i class="fa-solid fa-id-card w-5 h-5 text-gray-400"></i>
        <span class="ml-3">Data Member</span>
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-700">
        <i class="fa-solid fa-gamepad w-5 h-5 text-gray-400"></i>
        <span class="ml-3">Data Sewa</span>
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-700">
        <i class="fa-solid fa-file-invoice-dollar w-5 h-5 text-gray-400"></i>
        <span class="ml-3">Data Transaksi</span>
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-700">
        <i class="fa-solid fa-user w-5 h-5 text-gray-400"></i>
        <span class="ml-3">Users</span>
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-700">
        <i class="fa-solid fa-right-from-bracket w-5 h-5 text-gray-400"></i>
        <span class="ml-3">Log Out</span>
      </a>
    </li>
  </ul>
</aside>
