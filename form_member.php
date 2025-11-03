<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="min-h-screen bg-slate-900 text-gray-900 flex justify-center mt-12">
    <div class="rounded-lg max-w-screen-xl m-0 sm:m-10 bg-slate-800 shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div>
                <h1 class="text-center text-5xl text-white font-bold tracking-tight">DAFTAR MEMBERSHIP</h1>
            </div>
            <div class="mt-7 flex flex-col items-center">
                <div class="w-full flex-1 mt-8">

                    <form action="proses_form_member.php" method="POST" class="mx-auto max-w-xs">
                        <div class="text-white">
                        <span>Nama Lengkap</span>
                        <input
                            class="text-black w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                            type="text" placeholder="Nama Lengkap" name="nama_lengkap"/>
                        </div>
                        
                        <div class="mt-5 text-white">
                        <span>Email</span>
                        <input
                            class="text-black w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                            type="text" placeholder="Email" name="email"/>
                        </div>
                        
                        <div class="mt-5 text-white">
                        <span>No Hp</span>
                        <input
                            class="text-black w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                            type="number" placeholder="No Hp" name="no_hp"/>
                        </div>
                        
                        <div class="mt-5 text-white">
                        <span>Alamat</span>
                        <input
                            class="text-black w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                            type="text" placeholder="Alamat" name="alamat"/>
                        </div>
                        
                        <div class="mt-5 text-white">
                        <span>Tanggal Pendaftaran</span>
                        <input
                            class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white text-black"
                            type="date" name="tanggal_daftar"/>
                        </div>

                        <button
                            class="mt-5 tracking-wide font-semibold bg-red-500 text-white-500 w-full py-4 rounded-lg hover:bg-red-600 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none" type="submit" name="btndaftar">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">
                                Daftar Member
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div 
            class="hidden lg:flex relative w-1/2 bg-cover bg-center rounded-lg " 
            style="background-image: url('assets/img/gameps3.jpg');;"
            >
            <!-- Shadow di sisi kiri -->
            <div class="absolute inset-0 bg-gradient-to-br from-black/100 via-transparent to-black/100 rounded-r-lg"></div>
        </div>
    </div>
</div>
</body>
</html>
<?php include 'includes/footer.php'; ?>