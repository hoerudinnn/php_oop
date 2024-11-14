
Dalam Object-Oriented Programming (OOP), extend dan override adalah konsep yang penting untuk memahami bagaimana sebuah subclass dapat memperluas dan mengubah perilaku dari superclass.

Extend: Ketika sebuah subclass mewarisi (inheritance) class lain (superclass) menggunakan keyword extends, subclass tersebut mendapatkan semua properti dan metode dari superclass. Ini artinya, subclass secara otomatis memiliki akses ke semua fungsi dan variabel yang dimiliki oleh superclass.

Override: Override adalah konsep di mana subclass dapat mengubah atau mendefinisikan ulang metode yang diwarisi dari superclass. Dengan override, subclass bisa memberikan implementasi sendiri dari metode yang sudah ada di superclass, sehingga perilakunya berbeda ketika metode tersebut dipanggil dari objek subclass.

Contoh Extend dan Override dalam PHP
Misalkan kita memiliki sebuah superclass bernama Kendaraan yang mendefinisikan metode tampilkanInfo(). Kita akan membuat subclass Mobil yang mewarisi Kendaraan dan meng-override metode tampilkanInfo().

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
        echo "Ini adalah kendaraan merk $this->merk berwarna $this->warna.";
    }
}
?>
2. Mendefinisikan Subclass Mobil dengan Extend dan Override
Subclass Mobil menggunakan keyword extends untuk mewarisi Kendaraan. Selain itu, subclass Mobil meng-override metode tampilkanInfo() dari superclass untuk menampilkan pesan yang lebih spesifik.

php
Copy code
<?php
// Subclass yang mewarisi superclass Kendaraan
class Mobil extends Kendaraan {
    public $jenisBahanBakar;

    public function __construct($merk, $warna, $jenisBahanBakar) {
        // Memanggil konstruktor parent class
        parent::__construct($merk, $warna);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    // Override metode tampilkanInfo dari parent class
    public function tampilkanInfo() {
        echo "Mobil merk $this->merk, berwarna $this->warna, menggunakan bahan bakar $this->jenisBahanBakar.";
    }
}
?>
3. Menggunakan Extend dan Override
php
Copy code
<?php
// Membuat objek dari class Kendaraan
$kendaraan1 = new Kendaraan("Honda", "Putih");
$kendaraan1->tampilkanInfo();  
// Output: Ini adalah kendaraan merk Honda berwarna Putih.

echo "<br>";

// Membuat objek dari subclass Mobil
$mobil1 = new Mobil("Toyota", "Merah", "Bensin");
$mobil1->tampilkanInfo();  
// Output: Mobil merk Toyota, berwarna Merah, menggunakan bahan bakar Bensin.
?>
Penjelasan:
Extend (extends): Dengan extends, subclass Mobil mewarisi semua properti dan metode dari superclass Kendaraan, yaitu merk, warna, dan tampilkanInfo().

Override: Metode tampilkanInfo() di subclass Mobil menimpa (override) metode tampilkanInfo() di superclass Kendaraan. Ketika tampilkanInfo() dipanggil dari objek Mobil, PHP menjalankan metode yang ada di Mobil, bukan yang ada di Kendaraan.

Kapan Menggunakan Extend dan Override?
Gunakan extend ketika Anda ingin membuat subclass yang mewarisi properti dan metode dari superclass.
Gunakan override ketika Anda ingin mengganti atau memodifikasi perilaku dari metode superclass agar sesuai dengan kebutuhan subclass.
Dengan extend dan override, Anda dapat membuat struktur kode yang fleksibel, modular, dan lebih mudah untuk dikembangkan.