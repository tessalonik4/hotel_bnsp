    // Contoh menggunakan Node.js, Express.js, dan modul mysql untuk mengambil data dari database MySQL

    const express = require('express');
    const mysql = require('mysql');

    const app = express();

    // Konfigurasi koneksi ke database MySQL di XAMPP
    const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root', // sesuaikan dengan username MySQL Anda
    password: '', // sesuaikan dengan password MySQL Anda
    database: 'reservation_database' // ganti dengan nama database yang digunakan
    });

    // Koneksi ke database MySQL
    connection.connect((err) => {
    if (err) throw err;
    console.log('Terhubung ke database MySQL!');
    });

    // Endpoint untuk mendapatkan data pemesanan kamar hotel
    app.get('/pemesanan', (req, res) => {
    connection.query('SELECT * FROM customer_data', (err, results) => {
        if (err) throw err;
        res.json(results); // Kirim data pemesanan dalam format JSON ke frontend
    });
    });

    // Jalankan server pada port tertentu (misalnya, port 3000)
    const port = 3000;
    app.listen(port, () => {
    console.log(`Server berjalan pada port ${port}`);
    });
