<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error { color: red; }
        .sukses { color: green; }
        label { display: inline-block; width: 80px; }
    </style>
</head>
<body>

    <h1>Form Input dengan Validasi AJAX</h1>
    
    <div id="form-messages"></div>

    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();

                // Bersihkan pesan error sebelumnya
                $(".error").text("");
                $("#form-messages").html("");

                // Ambil nilai dari form
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }
                
                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }
                
                // Validasi Password (minimal 8 karakter)
                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                }

                // Jika validasi di klien lolos, kirim data menggunakan AJAX
                if (valid) {
                    $.ajax({
                        type: "POST",
                        url: "proses_validasi.php",
                        data: $(this).serialize(),
                        dataType: "json",
                        
                        success: function(response) {
                            if (response.status === 'success') {
                                $("#form-messages").html('<p class="sukses">' + response.message + '</p>');
                                $('#myForm')[0].reset();
                            } else {
                                $("#form-messages").html('<p class="error">' + response.message + '</p>');
                            }
                        },
                        
                        error: function() {
                            $("#form-messages").html('<p class="error">Terjadi kesalahan koneksi.</p>');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>