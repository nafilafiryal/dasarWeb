<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP Lengkap</title>
    <style>
        /* Memberi warna merah pada teks error */
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

    <h2>Form Input PHP</h2>

    <?php
    // Inisialisasi variabel
    $input = $email = "";
    $errors = []; // Menggunakan array untuk menampung semua pesan error
    $suksesMsg = "";

    // Cek apakah form sudah disubmit menggunakan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // --- Validasi Input Data ---
        if (empty($_POST["input"])) {
            $errors['input'] = "Input tidak boleh kosong!";
        } else {
            $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
        }

        // --- Validasi Email (kode tambahan dari gambar) ---
        if (empty($_POST["email"])) {
            $errors['email'] = "Email tidak boleh kosong!";
        } else {
            $email = $_POST['email'];
            // Memeriksa apakah input adalah email yang valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Format email tidak valid.";
            }
        }
        
        // Cek apakah tidak ada error sama sekali
        if (empty($errors)) {
            // Buat pesan sukses
            $suksesMsg = "Data berhasil disimpan: Input = " . $input . ", Email = " . $email;

            // Kosongkan variabel agar form bersih setelah sukses
            $input = $email = "";
        }
    }
    ?>

    <?php
    // Tampilkan pesan sukses jika ada
    if (!empty($suksesMsg)) {
        echo "<p style='color:green;'>" . $suksesMsg . "</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="input">Input Data:</label><br>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>">
        <span class="error">* <?php echo $errors['input'] ?? '';?></span>
        <br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $errors['email'] ?? '';?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>