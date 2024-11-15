Inheritance atau Pewarisan dalam Object-Oriented Programming (OOP) adalah konsep di mana sebuah class (disebut child class atau subclass) dapat mewarisi properti dan metode dari class lain (disebut parent class atau superclass). Ini memungkinkan subclass untuk menggunakan dan memperluas fitur yang sudah ada di superclass, sehingga kode menjadi lebih terstruktur dan lebih mudah dikelola.

Cara Menggunakan Inheritance di PHP
Untuk membuat inheritance, Anda cukup menggunakan keyword extends pada definisi class baru untuk mewarisi class lainnya.

Contoh Penerapan Inheritance di PHP
Misalkan kita memiliki sebuah class Kendaraan sebagai superclass, dan class Mobil yang mewarisi class Kendaraan.

php
Copy code
<?php
Parent Class (Superclass)
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Method untuk menampilkan info kendaraan
    public function tampilkanInfo() {
        echo "Kendaraan merk $this->merk berwarna $this->warna.";
    }
}
?>
Membuat Subclass Mobil yang Mewarisi Kendaraan
php
Copy code
<?php
Child Class (Subclass) yang mewarisi Kendaraan
class Mobil extends Kendaraan {
    public $jenisBahanBakar;

    public function __construct($merk, $warna, $jenisBahanBakar) {
        // Memanggil konstruktor parent class
        parent::__construct($merk, $warna);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    // Method khusus untuk mobil
    public function tampilkanInfoMobil() {
        echo "Mobil merk $this->merk, berwarna $this->warna, menggunakan bahan bakar $this->jenisBahanBakar.";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah", "Bensin");

// Memanggil method dari parent class
$mobil1->tampilkanInfo();  // Output: Kendaraan merk Toyota berwarna Merah.
echo "<br>";

// Memanggil method dari child class
$mobil1->tampilkanInfoMobil();  // Output: Mobil merk Toyota, berwarna Merah, menggunakan bahan bakar Bensin.
?>
Penjelasan:
Parent Class (Kendaraan): Class ini memiliki properti merk dan warna, serta metode tampilkanInfo() yang menampilkan informasi umum tentang kendaraan.
Child Class (Mobil): Mewarisi semua properti dan metode dari Kendaraan. Selain itu, class Mobil memiliki properti tambahan jenisBahanBakar dan metode tampilkanInfoMobil() khusus untuk menampilkan informasi mobil.
Keyword parent::__construct(): Digunakan untuk memanggil konstruktor dari parent class dalam konstruktor child class. Ini memastikan bahwa properti merk dan warna diinisialisasi dengan benar.
Overriding (Menimpa Metode pada Subclass)
Subclass dapat menimpa (override) metode yang ada di parent class untuk menambahkan atau memodifikasi perilakunya.

Contoh:

php
Copy code
<?php
class Mobil extends Kendaraan {
    public $jenisBahanBakar;

    public function __construct($merk, $warna, $jenisBahanBakar) {
        parent::__construct($merk, $warna);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    // Override method tampilkanInfo dari parent class
    public function tampilkanInfo() {
        echo "Ini adalah Mobil merk $this->merk, berwarna $this->warna, menggunakan bahan bakar $this->jenisBahanBakar.";
    }
}

// Membuat objek dari class Mobil
$mobil2 = new Mobil("Honda", "Biru", "Solar");
$mobil2->tampilkanInfo();  // Output: Ini adalah Mobil merk Honda, berwarna Biru, menggunakan bahan bakar Solar.
?>
Penjelasan:
Override dilakukan pada metode tampilkanInfo() di class Mobil, sehingga ketika metode ini dipanggil dari objek Mobil, PHP menggunakan metode yang ada di subclass Mobil daripada di superclass Kendaraan.
Dengan overriding, subclass dapat menyesuaikan perilaku metode yang diwarisinya.
Manfaat Inheritance
Keteraturan Kode: Menghindari duplikasi kode dengan mengelompokkan fungsi umum ke dalam parent class.
Pemeliharaan Kode: Mempermudah perubahan yang berlaku ke semua subclass ketika ada modifikasi di parent class.
Ekstensibilitas: Memungkinkan subclass untuk menambahkan fitur tambahan tanpa mengubah parent class.
Kesimpulan
Inheritance memungkinkan satu class untuk mewarisi properti dan metode dari class lain.
extends digunakan untuk mendefinisikan subclass.
parent::__construct() memanggil konstruktor dari parent class.
Override memungkinkan subclass menimpa metode yang ada di parent class.
Inheritance adalah dasar dari OOP yang memungkinkan pengkodean yang lebih bersih dan terstruktur, serta mudah dikembangkan seiring bertambahnya kompleksitas aplikasi. -->