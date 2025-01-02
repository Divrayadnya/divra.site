<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    // Validasi data
    if (!empty($nama) && !empty($email) && !empty($komentar)) {
        // Menyiapkan email
        $to = "divrayadnyaa@gmail.com"; 
        $subject = "Komentar Baru dari " . $nama;
        $message = "Nama: " . htmlspecialchars($nama) . "\n";
        $message .= "Email: " . htmlspecialchars($email) . "\n";
        $message .= "Komentar:\n" . htmlspecialchars($komentar) . "\n";

        // Mengirim email
        $headers = "From: " . $email;
        if (mail($to, $subject, $message, $headers)) {
            echo "Komentar Anda telah dikirim.";
        } else {
            echo "Gagal mengirim komentar.";
        }
    } else {
        echo "Semua kolom harus diisi!";
    }
} else {
    echo "Formulir belum dikirim.";
}
?>