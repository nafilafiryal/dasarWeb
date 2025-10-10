<?php
header('Content-Type: application/json');

$errors = [];
$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : ''; // Jangan trim password

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama wajib diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    
    // Validasi Password
    if (empty($password)) {
        $errors[] = "Password wajib diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus memiliki minimal 8 karakter.";
    }

    // Cek apakah ada error
    if (!empty($errors)) {
        $response['status'] = 'error';
        $response['message'] = implode('<br>', $errors);
    } else {
        // Data valid, lanjutkan proses (misal: simpan ke database)
        // PENTING: Jangan pernah simpan password sebagai teks biasa. Gunakan password_hash().
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $response['status'] = 'success';
        $response['message'] = "Registrasi berhasil!";
    }

} else {
    $response['status'] = 'error';
    $response['message'] = 'Metode request tidak valid.';
}

echo json_encode($response);
?>