Subclass adalah class turunan yang mewarisi properti dan metode dari class induknya atau superclass. Dalam Object-Oriented Programming (OOP), subclass memungkinkan kita memperluas atau memodifikasi fitur yang ada di superclass, menambahkan properti atau metode khusus yang dibutuhkan oleh subclass tersebut.

Untuk mendefinisikan subclass di PHP, Anda bisa menggunakan keyword extends setelah nama subclass diikuti dengan nama superclass yang ingin diwarisi.

Contoh Pembuatan Subclass di PHP
Misalkan kita memiliki sebuah superclass bernama Kendaraan, dan kita ingin membuat subclass Mobil yang mewarisi properti dan metode dari Kendaraan.

1. Mendefinisikan Superclass Kendaraan
php
Copy code
<?php
// Superclass
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function tampilkanInfo() {
        echo "Kendaraan merk $this->merk berwarna $this->warna.";
    }
}
?>
2. Mendefinisikan Subclass Mobil
Subclass Mobil mewarisi properti dan metode dari Kendaraan. Selain itu, kita dapat menambahkan properti atau metode khusus untuk subclass ini.

php
Copy code
<?php
// Subclass yang mewarisi superclass Kendaraan
class Mobil extends Kendaraan {
    public $jenisBahanBakar;

    // Konstruktor di subclass
    public function __construct($merk, $warna, $jenisBahanBakar) {
        // Memanggil konstruktor parent class untuk inisialisasi merk dan warna
        parent::__construct($merk, $warna);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    // Metode khusus untuk subclass Mobil
    public function tampilkanInfoMobil() {
        echo "Mobil merk $this->merk, berwarna $this->warna, dengan bahan bakar $this->jenisBahanBakar.";
    }
}
?>
3. Menggunakan Subclass Mobil
Setelah subclass didefinisikan, Anda bisa membuat objek Mobil dan menggunakan properti serta metode yang dimilikinya.

php
Copy code
<?php
// Membuat objek dari subclass Mobil
$mobil1 = new Mobil("Toyota", "Merah", "Bensin");

// Mengakses metode yang diwarisi dari superclass
$mobil1->tampilkanInfo();  // Output: Kendaraan merk Toyota berwarna Merah.
echo "<br>";

// Mengakses metode khusus subclass Mobil
$mobil1->tampilkanInfoMobil();  // Output: Mobil merk Toyota, berwarna Merah, dengan bahan bakar Bensin.
?>
Penjelasan
extends: Digunakan untuk mendefinisikan bahwa Mobil adalah subclass dari Kendaraan.
Konstruktor parent::__construct(): Konstruktor subclass Mobil memanggil konstruktor dari superclass Kendaraan untuk menginisialisasi properti merk dan warna.
Metode tampilkanInfoMobil(): Merupakan metode khusus di subclass Mobil, yang tidak dimiliki oleh superclass Kendaraan.
Keuntungan Menggunakan Subclass
Kode Lebih Modular: Memecah fungsionalitas menjadi beberapa class membuat kode lebih terstruktur.
Pemanfaatan Kembali Kode: Menghindari duplikasi kode karena subclass dapat menggunakan fitur yang sudah didefinisikan di superclass.
Ekstensibilitas: Subclass dapat menambahkan fitur baru tanpa perlu mengubah kode superclass.
Dengan subclass, Anda dapat mengembangkan aplikasi OOP dengan lebih efisien dan fleksibel, sambil menjaga agar kode tetap bersih dan mudah dipelihara.