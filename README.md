🎮 Website Penyewaan PlayStation

Website ini dibuat untuk mengelola sistem penyewaan PlayStation secara digital.
Fitur yang tersedia meliputi pendaftaran member, form penyewaan, daftar penyewaan, dan panel admin untuk mengelola semua data.

⸻

🧩 Struktur Folder

project/
│
├─ index.php               # Beranda: fasilitas, kata pelanggan, daftar game, harga
├─ form_member.php         # Form registrasi member
├─ form_sewa.php           # Form penyewaan PS
├─ daftar_member.php       # Daftar member (untuk admin/lihat)
├─ daftar_sewa.php         # Riwayat sewa (untuk admin/member)
│
├─ admin/                  # Folder khusus admin
│   ├─ index.php           # Halaman login admin
│   ├─ dashboard.php       # Dashboard utama admin
│   ├─ manage_member.php   # Kelola data member
│   ├─ manage_sewa.php     # Kelola data penyewaan
│   ├─ manage_game.php     # Kelola daftar game
│   ├─ logout.php          # Logout admin
│   └─ includes/
│       ├─ header.php      # Navbar admin
│       └─ sidebar.php     # Sidebar menu admin
│
├─ assets/
│   ├─ css/
│   │   └─ style.css
│   ├─ js/
│   │   └─ script.js
│   └─ images/
│       └─ logo.png, banner.jpg, game1.jpg …
│
├─ includes/
│   ├─ header.php          # Navbar umum
│   └─ footer.php          # Footer umum
│
└─ database/
└─ db.sql              # Struktur database: member, sewa, game, admin

⸻

⚙ Fitur Utama

🏠 Halaman Utama (index.php)
	•	Menampilkan fasilitas, daftar game, harga, dan kata pelanggan.
	•	Dapat diakses oleh semua pengunjung tanpa login.

👥 Form Member
	•	Registrasi untuk pengguna baru (form_member.php).
	•	Data tersimpan di tabel member.

🎮 Form Sewa
	•	Member dapat mengisi form penyewaan (form_sewa.php).
	•	Data otomatis masuk ke tabel sewa.

📋 Daftar Member & Daftar Sewa
	•	Menampilkan semua member atau daftar transaksi sewa.
	•	Hanya admin yang bisa mengedit atau menghapus data.

🔐 Admin Panel
	•	Login untuk admin (admin/index.php).
	•	Mengelola data member, game, dan transaksi sewa.
	•	Memiliki dashboard dengan ringkasan data.