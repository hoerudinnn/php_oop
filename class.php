Dalam PHP, untuk mendefinisikan sebuah class dilakukan dengan menggunakan kata kunci class diikuti dengan nama class dan sepasang kurung kurawal {} untuk membungkus properti dan metode di dalamnya. Properti adalah variabel yang menggambarkan karakteristik class, sedangkan metode adalah fungsi yang menggambarkan perilaku atau tindakan class tersebut.

Struktur Dasar Class
Berikut adalah format dasar dari sebuah class:

<?php
class NamaClass {
    // Definisi properti
    public $namaProperti;

    // Definisi metode
    public function namaMetode() {
        // Kode yang dijalankan ketika metode dipanggil
    }
}
?>
Contoh Class Sederhana
Membuat class sederhana bernama Mobil yang memiliki properti merk dan warna, serta metode jalankan().

<?php
class Mobil {
    // Mendefinisikan properti
    public $merk;
    public $warna;

    // Constructor untuk menginisialisasi properti
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Mendefinisikan metode
    public function jalankan() {
        echo "Mobil $this->merk berwarna $this->warna sedang berjalan.";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah");
$mobil1->jalankan();  // Output: Mobil Toyota berwarna Merah sedang berjalan.
?>
Penjelasan:
class Mobil: Mendefinisikan sebuah class bernama Mobil.
Properti ($merk dan $warna): Variabel yang ada di dalam class, di mana $merk dan $warna menyimpan data yang terkait dengan objek mobil.
Constructor: Metode khusus __construct() yang otomatis dipanggil saat objek dibuat. Ini digunakan untuk menginisialisasi nilai awal properti.
Metode jalankan(): Sebuah metode yang mengeluarkan teks deskriptif tentang objek tersebut.