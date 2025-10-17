<?php
if ( !file_exists('documents')) {
    mkdir('documents', 0777, true);
}

if (isset($_FILES['files'])) {
    $errors = [];
    $success_messages = [];

    $allowed_extensions = array("pdf", "doc", "docx", "txt", "jpg", "jpeg", "png", "gif");
    $max_file_size = 2097152;

    for ($i=0; $i < count($_FILES['files']['name']); $i++) { 
        if ($_FILES['files']['error'][$i] == UPLOAD_ERR_OK) {
            $file_name = $_FILES['files']['name'][ $i];
            $file_size = $_FILES['files']['size'][ $i];
            $file_tmp = $_FILES['files']['tmp_name'][ $i];

            $file_ext_array = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext_array));

            if (in_array($file_ext, $allowed_extensions) === false) {
                $errors[] = "File '{$file_name}': Ekstensi '{$file_ext}' tidak diizinkan. Ekstensi yang diizinkan: " . implode(', ', $allowed_extensions) . ".";
                continue; 
            }

            if ($file_size > $max_file_size) {
                $errors[] = "File '{$file_name}': Ukuran tidak boleh lebih dari " . ($max_file_size / 1024 / 1024) . " MB.";
                continue; 
            }

            if (move_uploaded_file($file_tmp, "documents/" . $file_name)) {
                $success_messages[] = "File '{$file_name}' berhasil diunggah.";
            } else {
                $errors[] = "File '{$file_name}': Gagal memindahkan file ke folder 'documents'. Pastikan folder ada dan memiliki izin tulis.";
            }
        } else {
            $error_code = $_FILES['files']['error'][$i];
            $errors[] = "File '{$_FILES['files']['name'][$i]}': Terjadi kesalahan upload (Kode: {$error_code}).";
        }
    }

    if (!empty($success_messages)) {
        echo "<p style='color: green;'>" . implode("</p><p style='color: green;'>", $success_messages) . "</p>";
    }
    if (!empty($errors)) {
        echo "<p style='color: red;'>" . implode("</p><p style='color: red;'>", $errors) . "</p>";
    }

    if (empty($success_messages) && empty($errors)) {
        echo "Tidak ada file yang diunggah.";
    }
} else {
    echo "Tidak ada file yang diterima.";
}
?>
