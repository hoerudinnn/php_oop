Instance object adalah objek yang dibuat berdasarkan sebuah class. Ketika Anda membuat sebuah objek dari sebuah class, objek tersebut disebut sebagai instance dari class tersebut.

Menjelaskan Instance:
Class adalah blueprint atau template, yang mendefinisikan properti dan metode.
Object (instance) adalah representasi nyata dari class tersebut, yang memiliki data yang spesifik (nilai dari properti) dan bisa menjalankan metode yang ada di dalam class.
Cara Membuat Instance dari Class
Untuk membuat sebuah instance object, Anda menggunakan kata kunci new diikuti dengan nama class. Contohnya:

php
Copy code
<?php
class Mobil {
    public $merk;
    public $warna;

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode
    public function jalankan() {
        echo "Mobil $this->merk berwarna $this->warna sedang berjalan.";
    }
}

// Membuat instance (objek) dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah");
$mobil2 = new Mobil("Honda", "Biru");

// Mengakses metode dan properti objek
echo $mobil1->jalankan();  // Output: Mobil Toyota berwarna Merah sedang berjalan.
echo "<br>";
echo $mobil2->jalankan();  // Output: Mobil Honda berwarna Biru sedang berjalan.
?>
Penjelasan:
$mobil1 = new Mobil("Toyota", "Merah");: Di sini, kita membuat objek $mobil1 yang merupakan instance dari class Mobil. Ini berarti objek $mobil1 sekarang memiliki properti merk dan warna yang diisi dengan "Toyota" dan "Merah".
$mobil2 = new Mobil("Honda", "Biru");: Ini adalah instance kedua yang dibuat dari class Mobil dengan nilai properti berbeda, yaitu "Honda" dan "Biru".
$mobil1->jalankan();: Mengakses metode jalankan() dari objek $mobil1.
Mengapa Perlu Instance?
Instance memungkinkan Anda membuat objek yang memiliki nilai dan status yang berbeda-beda, tetapi menggunakan definisi umum yang sama (class).
Misalnya, dengan class Mobil, Anda bisa membuat banyak objek mobil, masing-masing dengan merk dan warna yang berbeda.
Setiap objek yang Anda buat akan memiliki salinan sendiri dari properti dan metode yang ada di class tersebut, memungkinkan penggunaan data dan perilaku yang berbeda untuk setiap objek.