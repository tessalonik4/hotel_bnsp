<!DOCTYPE html>
        <html>
        <head>
        <title>Form Pemesanan Kamar Hotel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="script.js"></script>
        </head>
        <body>

        <h2>Form Pemesanan Kamar Hotel</h2>

        <form action="tambah_data.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="jenis">Jenis Kelamin:</label><br>
        <select id="jenis" name="jenis">
            <option value="laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select><br>
        <label for="noid">Nomor Identitas:</label><br>
        <input type="text" id="noid" name="noid"><br>
        <label for="tipe">Tipe Kamar:</label><br>
        <select id="tipe" name="tipe">
            <option value="standar">Standar Deluxe Room</option>
            <option value="deluxe">Deluxe Room</option>
            <option value="executif">Executif Room</option>
            <option value="Honeymoon">Honeymoon Suite</option>
        </select><br>
        <label for="tglpesan">Tanggal Pesan:</label><br>
        <input type="date" id="tglpesan" name="tglpesan"><br>
        <label for="durasi">Durasi Menginap:</label><br>
        <input type="text" id="durasi" name="durasi"><br>
        <label for="breakfast">Termasuk Breakfast:</label><br>
        <input type="checkbox" id="breakfast" name="breakfast"><br>
        <input type="button" value="Hitung Total Bayar" onclick="hitungTotal()">
        <label for="total">Total Bayar:</label><br>
        <input type="text" id="total" name="total" readonly><br>
        <label for="diskon">Total Diskon:</label><br>
        <input type="text" id="diskon" name="diskon" readonly><br>
        <input type="submit" value="Submit">
        </form>
        </body>
        </html>