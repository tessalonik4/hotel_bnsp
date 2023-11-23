function hitungTotal() {
    var hargaKamar = document.getElementById("tipe").value;
    var durasi = document.getElementById("durasi").value;
    var breakfas = document.getElementById("breakfast").checked;

    var totalHarga = 0;

    if (hargaKamar == "standar") {
        totalHarga = 250000;
    } else if (hargaKamar == "deluxe") {
        totalHarga = 350000;
    } else if (hargaKamar == "executif") {
        totalHarga = 500000;
    } else if (hargaKamar == "Honeymoon") {
        totalHarga = 750000;
    }

    totalHarga = totalHarga * durasi;

    if (breakfas) {
        totalHarga = totalHarga + (80000 * durasi);
    }

        if (durasi > 3) {
            totalDiskon = totalHarga * 0.1;
            totalHarga = totalHarga - totalDiskon;
            // Memasukkan nilai total diskon ke dalam input "diskon"
            document.getElementById("diskon").value = totalDiskon;
        } else {
            // Jika durasi tidak lebih dari 3, atur nilai diskon menjadi 0
            document.getElementById("diskon").value = 0;
        }
        
        document.getElementById("total").value = totalHarga;
        }