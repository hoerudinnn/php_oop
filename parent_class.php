Dalam Object-Oriented Programming (OOP) di PHP, ketika bekerja dengan pewarisan (inheritance), kita dapat merujuk ke parent class menggunakan kata kunci parent. Kata kunci ini berguna ketika kita ingin mengakses metode atau properti dari class induk (parent) di dalam subclass (child class), terutama jika metode tersebut telah di-override di subclass.

Penggunaan parent dalam PHP
Memanggil Metode dari Parent Class: Jika metode di parent class telah di-override dalam subclass, kita bisa tetap memanggil metode asli dari parent class menggunakan parent::methodName().

Mengakses Konstruktor Parent Class: Saat mendefinisikan konstruktor di subclass, kita bisa memanggil konstruktor parent menggunakan parent::__construct() untuk memastikan bahwa inisialisasi di parent class juga dilakukan.

Contoh Penggunaan parent
Misalkan kita memiliki class BangunDatar sebagai parent, dan subclass Persegi yang melakukan override pada metode deskripsi() dan juga memanggil konstruktor parent.

Contoh Kode
php
Copy code
<?php
// Parent class
class BangunDatar {
    protected $nama;

    // Konstruktor parent class
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode deskripsi di parent class
    public function deskripsi() {
        return "Ini adalah bangun datar bernama " . $this->nama;
    }
}

// Subclass yang mewarisi dari BangunDatar
class Persegi extends BangunDatar {
    private $sisi;

    // Konstruktor subclass yang memanggil parent::__construct()
    public function __construct($nama, $sisi) {
        parent::__construct($nama); // Memanggil konstruktor parent
        $this->sisi = $sisi;
    }

    // Override metode deskripsi
    public function deskripsi() {
        // Memanggil metode deskripsi dari parent class
        $deskripsiParent = parent::deskripsi();
        return $deskripsiParent . " dengan panjang sisi " . $this->sisi;
    }

    // Metode untuk menghitung luas
    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}
?>
Menggunakan Subclass
php
Copy code
<?php
// Membuat objek Persegi
$persegi = new Persegi("Persegi", 4);

// Memanggil metode deskripsi dari subclass
echo $persegi->deskripsi(); 
// Output: Ini adalah bangun datar bernama Persegi dengan panjang sisi 4

// Menghitung luas
echo "Luas Persegi: " . $persegi->hitungLuas(); 
// Output: Luas Persegi: 16
?>
Penjelasan Kode
Memanggil Konstruktor Parent dengan parent::__construct(): Konstruktor Persegi menerima dua parameter ($nama dan $sisi). Agar nama dapat diinisialisasi di class induk, kita menggunakan parent::__construct($nama), yang memanggil konstruktor BangunDatar untuk mengatur nilai $nama.

Override dan Menggunakan parent::deskripsi(): Di dalam Persegi, metode deskripsi() men-override metode di BangunDatar. Namun, kita tetap memanggil deskripsi() dari parent class menggunakan parent::deskripsi(). Dengan cara ini, kita bisa menambahkan informasi spesifik tentang subclass (panjang sisi persegi) di samping deskripsi umum dari parent.

Manfaat parent dalam OOP
Mempertahankan Fungsionalitas Parent: Saat men-override, parent membantu mempertahankan fungsionalitas yang sudah ada di parent class.
Mengakses Konstruktor dan Metode yang Di-override: Dengan parent, subclass bisa memanfaatkan inisialisasi atau logika dasar di parent sebelum menambahkan atau memodifikasi perilaku khususnya.
Kesimpulan
Kata kunci parent adalah alat penting dalam OOP di PHP untuk memanfaatkan dan memodifikasi fungsionalitas class induk dalam subclass.