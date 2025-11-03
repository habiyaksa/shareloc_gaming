<?php 
include 'includes/header.php'; 
include 'koneksi.php';
include 'includes/mailer.php'; // PHPMailer & .env

if (isset($_POST['btndaftar'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $tanggal_daftar = date('Y-m-d H:i:s', strtotime($_POST['tanggal_daftar'])); // format datetime

    // ==== CEK EMAIL SUDAH TERDAFTAR ====
    $cek = $conn->prepare("SELECT id_member FROM membership WHERE email = ?");
    $cek->bind_param("s", $email);
    $cek->execute();
    $cek->store_result();
    if ($cek->num_rows > 0) {
        echo "<script>
            alert('Email $email sudah terdaftar! Gunakan email lain.');
            window.location.href='form_member.php';
        </script>";
        exit;
    }
    $cek->close();

    // ==== GENERATE KODE MEMBER TERBARU ====
    $result = $conn->query("SELECT kode_member FROM membership ORDER BY id_member DESC LIMIT 1");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $last_code = $row['kode_member'];
        $num = (int) substr($last_code, 3) + 1;
        $kode_member = "MBR" . str_pad($num, 3, "0", STR_PAD_LEFT);
    } else {
        $kode_member = "MBR001";
    }

    // ==== GENERATE KODE UNIK ====
    $kode_unik = uniqid('PS');

    // ==== INSERT DATA MEMBER ====
    $stmt = $conn->prepare("INSERT INTO membership 
        (nama_lengkap,email,no_hp,alamat,tanggal_daftar,kode_member,kode_unik,status)
        VALUES (?,?,?,?,?,?,?,?)");
    $status = 'pending';
    $stmt->bind_param("ssssssss", $nama_lengkap,$email,$no_hp,$alamat,$tanggal_daftar,$kode_member,$kode_unik,$status);

    if($stmt->execute()) {
        // ==== KIRIM EMAIL ====
        $subject = "Kode Aktivasi Member PlayStation";
        $body = "
            <h2>Selamat Datang di Website PS Naifa 🎮</h2>
            <p>Kode aktivasi kamu: <b>$kode_unik</b></p>
            <p>Segera ambil kartu dalam 2 hari agar akunmu aktif.</p>
        ";

        if (kirimEmail($email, $subject, $body)) {
            $pesanEmail = "Email aktivasi telah dikirim ke $email";
        } else {
            $pesanEmail = "Gagal mengirim email.";
        }

        echo "<script>
            alert('Member berhasil ditambahkan dengan kode: $kode_member. $pesanEmail');
            window.location.href='form_member.php';
        </script>";
    } else {
        echo "<script>
            alert('Terjadi kesalahan saat menyimpan data: ".$stmt->error."');
            window.location.href='form_member.php';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>