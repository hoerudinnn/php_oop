Pemrograman Berorientasi Objek (Object-Oriented Programming atau OOP) adalah paradigma pemrograman yang berfokus pada konsep "objek." OOP membantu memodelkan dunia nyata dalam bentuk objek di dalam program, sehingga kode menjadi lebih terstruktur, modular, dan mudah dikelola.

Berikut adalah konsep utama dalam OOP beserta contoh dalam PHP:

1. Class dan Object
Class adalah blueprint atau template untuk membuat objek. Di dalamnya, terdapat atribut (data/properti) dan metode (fungsi) yang digunakan oleh objek.
Object adalah instansi dari sebuah class, yaitu variabel yang dibuat berdasarkan class dan bisa menggunakan atribut dan metode di dalamnya.
Contoh Class dan Object
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

    public function jalankan() {
        return "Mobil $this->merk berwarna $this->warna sedang berjalan.";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->jalankan();  // Output: Mobil Toyota berwarna Merah sedang berjalan.
?>
Penjelasan:

Class Mobil memiliki properti $merk dan $warna, serta metode jalankan().
Objek $mobil1 dibuat dari class Mobil dan bisa menggunakan properti dan metode di dalamnya.
2. Properti dan Metode
Properti adalah variabel yang mendeskripsikan karakteristik dari objek. Dalam OOP, properti biasanya disebut dengan "atribut" atau "data."
Metode adalah fungsi yang berada di dalam class dan mendeskripsikan perilaku dari objek tersebut.
3. Encapsulation (Enkapsulasi)
Enkapsulasi adalah konsep untuk membungkus data dan metode agar tidak bisa diakses secara langsung dari luar. Ini melindungi data dari perubahan yang tidak diinginkan dan hanya menyediakan akses yang dibutuhkan.

PHP menggunakan kata kunci public, protected, dan private untuk mengatur visibilitas properti dan metode:

public: Dapat diakses dari mana saja.
protected: Hanya dapat diakses oleh class itu sendiri dan turunannya.
private: Hanya dapat diakses oleh class itu sendiri.
Contoh Enkapsulasi
php
Copy code
<?php
class Produk {
    private $harga;  // Private property

    public function __construct($harga) {
        $this->setHarga($harga);
    }

    // Getter
    public function getHarga() {
        return $this->harga;
    }

    // Setter
    public function setHarga($harga) {
        if ($harga >= 0) {
            $this->harga = $harga;
        } else {
            echo "Harga tidak valid!";
        }
    }
}

$produk1 = new Produk(15000);
echo $produk1->getHarga();  // Output: 15000
$produk1->setHarga(-5000);   // Output: Harga tidak valid!
?>
Penjelasan:

harga disetel sebagai private, sehingga tidak dapat diakses langsung dari luar class Produk.
Akses terhadap harga diberikan melalui metode getHarga() dan setHarga(), yang memungkinkan validasi harga sebelum mengubah nilainya.
4. Inheritance (Pewarisan)
Inheritance memungkinkan sebuah class mewarisi properti dan metode dari class lain. Class yang mewarisi disebut child class, sedangkan class yang diwarisi disebut parent class.

Contoh Inheritance
php
Copy code
<?php
class Hewan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function suara() {
        return "Hewan ini mengeluarkan suara.";
    }
}

// Kelas Kucing mewarisi kelas Hewan
class Kucing extends Hewan {
    public function suara() {
        return "Meong!";
    }
}

$hewan1 = new Hewan("Umum");
echo $hewan1->suara();  // Output: Hewan ini mengeluarkan suara.

$kucing1 = new Kucing("Kitty");
echo $kucing1->suara();  // Output: Meong!
?>
Penjelasan:

Class Kucing mewarisi class Hewan, sehingga dapat menggunakan properti dan metode dari Hewan.
Kucing meng-override metode suara() untuk memberikan suara khusus untuk kucing.
5. Polymorphism (Polimorfisme)
Polimorfisme memungkinkan metode yang sama untuk berperilaku berbeda pada objek yang berbeda. Dalam PHP, ini bisa diterapkan melalui metode yang di-override.

Contoh Polimorfisme
php
Copy code
<?php
class Burung {
    public function suara() {
        return "Kicauan burung";
    }
}

class Ayam extends Burung {
    public function suara() {
        return "Kukuruyuk";
    }
}

class Elang extends Burung {
    public function suara() {
        return "Kiyaa!";
    }
}

$burung1 = new Burung();
$ayam1 = new Ayam();
$elang1 = new Elang();

echo $burung1->suara();  // Output: Kicauan burung
echo $ayam1->suara();    // Output: Kukuruyuk
echo $elang1->suara();   // Output: Kiyaa!
?>
Penjelasan:

Class Burung, Ayam, dan Elang memiliki metode suara() yang sama, tetapi setiap class memberikan implementasi yang berbeda sesuai jenis burung.
6. Abstraction (Abstraksi)
Abstraksi adalah konsep untuk menyembunyikan detail implementasi dan hanya menampilkan antarmuka yang diperlukan. Di PHP, abstraksi dapat diterapkan dengan class abstract dan interface.

Abstract Class: Class yang tidak dapat diinstansiasi secara langsung. Hanya dapat digunakan sebagai class induk.
Interface: Class yang hanya mendefinisikan metode tanpa implementasi. Class yang mengimplementasikan interface harus mengimplementasikan semua metodenya.
Contoh Abstract Class
php
Copy code
<?php
abstract class Kendaraan {
    abstract public function bergerak();
}

class Sepeda extends Kendaraan {
    public function bergerak() {
        return "Sepeda bergerak dengan cara dikayuh.";
    }
}

class Mobil extends Kendaraan {
    public function bergerak() {
        return "Mobil bergerak dengan mesin.";
    }
}

$sepeda = new Sepeda();
echo $sepeda->bergerak();  // Output: Sepeda bergerak dengan cara dikayuh.

$mobil = new Mobil();
echo $mobil->bergerak();   // Output: Mobil bergerak dengan mesin.
?>
Penjelasan:

Class Kendaraan adalah abstract dan mendefinisikan metode bergerak() tanpa implementasi.
Class Sepeda dan Mobil mengimplementasikan metode bergerak() sesuai karakteristik masing-masing.
Contoh Interface
php
Copy code
<?php
interface Hewan {
    public function suara();
}

class Anjing implements Hewan {
    public function suara() {
        return "Guk guk!";
    }
}

$anjing1 = new Anjing();
echo $anjing1->suara();  // Output: Guk guk!
?>
Penjelasan:

Interface Hewan mendefinisikan metode suara().
Class Anjing mengimplementasikan interface Hewan dan mendefinisikan metode suara() sesuai kebutuhan.
Ringkasan:
Class dan Object: Class adalah blueprint, object adalah instansiasi dari class.
Properti dan Metode: Properti sebagai atribut, metode sebagai perilaku.
Encapsulation: Mengontrol akses terhadap data menggunakan visibilitas (public, protected, private).
Inheritance: Mewarisi properti dan metode dari class lain.
Polymorphism: Metode yang sama bisa berbeda hasil tergantung objeknya.
Abstraction: Menyembunyikan detail implementasi dengan abstract class dan interface.