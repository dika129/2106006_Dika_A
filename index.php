<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Jersey</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Pemesanan Jersey</h2>
        <form action="proses_input.php" method="post" onsubmit="return validateForm()">
            <label for="nama">Nama Pemilik:</label>
            <input type="nama" name="nama" id="nama" required>

            <label for="no">Nomor Jersey:</label>
            <input type="number" name="no" id="no" required>

            <label for="warna">Warna Jersey:</label>
            <input type="warna" name="warna" id="warna" required>

            <label for="ukuran">Ukuran Jersey:</label>
            <select name="ukuran" id="ukuran" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <!-- Add more options as needed -->
            </select>

            <label for="jumlah">Jumlah Jersey:</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required>

            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
        function validateForm() {
            // You can add validation logic here if needed
            return true; // Return false if validation fails
        }
    </script>
</body>
</html>
