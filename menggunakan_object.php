Menggunakan objek dalam Object-Oriented Programming (OOP) berarti membuat dan mengoperasikan objek yang dihasilkan dari sebuah class. Objek adalah instance dari sebuah class dan memiliki data (properti) serta perilaku (metode) yang didefinisikan dalam class tersebut. Anda bisa membuat objek, mengakses propertinya, serta memanggil metode-metode yang ada di dalam class tersebut.

Langkah-Langkah Menggunakan Objek:
Mendefinisikan Class: Sebuah template atau blueprint untuk membuat objek.
Membuat Objek: Membuat instance dari class menggunakan keyword new.
Mengakses Properti dan Metode: Menggunakan objek untuk mengakses data dan memanggil fungsi.
Contoh Penggunaan Objek dalam PHP
1. Mendefinisikan Class
php
Copy code
<?php
class Mobil {
    public $merk;
    public $warna;
    private $harga;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($merk, $warna, $harga) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    // Method untuk menampilkan informasi mobil
    public function tampilkanInfo() {
        echo "Mobil $this->merk berwarna $this->warna dan harganya adalah $this->harga.";
    }

    // Method untuk mendapatkan harga
    public function getHarga() {
        return $this->harga;
    }
}
?>
2. Membuat Objek
Setelah class didefinisikan, Anda bisa membuat objek dari class tersebut dan mengakses properti serta metode.

php
Copy code
<?php
// Membuat objek Mobil dengan nilai yang sesuai
$mobil1 = new Mobil("Toyota", "Merah", 200000000);
$mobil2 = new Mobil("Honda", "Biru", 180000000);

// Mengakses properti dan metode melalui objek
echo $mobil1->merk;  // Output: Toyota
echo "<br>";
$mobil1->tampilkanInfo();  // Output: Mobil Toyota berwarna Merah dan harganya adalah 200000000.
echo "<br>";

// Mengakses harga melalui metode getter
echo "Harga mobil 2: " . $mobil2->getHarga();  // Output: Harga mobil 2: 180000000
?>
Penjelasan:
Membuat Objek: Dengan sintaks new ClassName(), kita membuat objek $mobil1 dan $mobil2 dari class Mobil. Pada saat pembuatan objek, konstruktor (__construct) dipanggil untuk menginisialisasi nilai dari properti merk, warna, dan harga objek tersebut.
Mengakses Properti: Anda dapat mengakses properti objek menggunakan operator ->. Misalnya, $mobil1->merk mengakses nilai properti merk dari objek $mobil1.
Memanggil Method: Metode di dalam class dapat dipanggil menggunakan objek dengan cara $mobil1->tampilkanInfo(). Metode ini menampilkan informasi mobil yang sesuai dengan nilai properti objek.
3. Menambahkan Fungsi Penggunaan Objek Lebih Lanjut
Anda dapat membuat objek lebih interaktif dengan menggunakan lebih banyak metode yang berfungsi untuk memperbarui atau memanipulasi data objek.

php
Copy code
<?php
class Mobil {
    public $merk;
    public $warna;
    private $harga;

    public function __construct($merk, $warna, $harga) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function tampilkanInfo() {
        echo "Mobil $this->merk berwarna $this->warna dan harganya adalah $this->harga.";
    }

    public function getHarga() {
        return $this->harga;
    }

    // Method untuk mengubah harga mobil
    public function setHarga($hargaBaru) {
        $this->harga = $hargaBaru;
    }
}

// Membuat objek Mobil
$mobil1 = new Mobil("Toyota", "Merah", 200000000);
$mobil1->tampilkanInfo();  // Output: Mobil Toyota berwarna Merah dan harganya adalah 200000000.
echo "<br>";

// Mengubah harga mobil
$mobil1->setHarga(220000000);
$mobil1->tampilkanInfo();  // Output: Mobil Toyota berwarna Merah dan harganya adalah 220000000.
?>
Penjelasan:
setHarga($hargaBaru) adalah metode setter yang digunakan untuk mengubah nilai dari properti harga objek.
Ketika Anda memanggil $mobil1->setHarga(220000000), harga mobil berubah menjadi 220 juta, dan metode tampilkanInfo() akan menampilkan harga yang telah diperbarui.
Kesimpulan:
Class adalah template untuk objek, dan objek adalah instansi nyata dari class tersebut.
Anda membuat objek menggunakan new ClassName().
Properti objek diakses menggunakan operator ->.
Method objek juga dipanggil menggunakan operator -> untuk menjalankan fungsionalitas terkait objek.
Menggunakan objek memungkinkan Anda untuk mendefinisikan karakteristik dan perilaku yang lebih kompleks dan terstruktur dalam program Anda.