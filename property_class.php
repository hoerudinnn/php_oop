Properti dalam Object-Oriented Programming (OOP) adalah variabel yang berada di dalam sebuah class. Properti ini menggambarkan karakteristik atau data yang dimiliki oleh objek yang dibuat dari class tersebut. Setiap objek dapat memiliki nilai yang berbeda untuk propertinya, meskipun mereka dibuat dari class yang sama.

Properti di dalam class dapat memiliki berbagai tingkat akses, yang mengatur siapa saja yang dapat mengakses atau mengubah nilai properti tersebut. PHP menyediakan tiga tingkat akses untuk properti: public, protected, dan private.

1. Public
Properti yang dideklarasikan dengan public dapat diakses dan diubah dari mana saja, baik di dalam class itu sendiri, di luar class, atau objek lain yang dibuat berdasarkan class tersebut.
2. Protected
Properti yang dideklarasikan dengan protected hanya bisa diakses oleh class itu sendiri dan class turunannya (child class), tidak bisa diakses dari luar class.
3. Private
Properti yang dideklarasikan dengan private hanya dapat diakses di dalam class itu sendiri. Tidak bisa diakses dari luar class atau class turunannya.
Contoh Penggunaan Properti dalam Class
php
Copy code
<?php
class Mobil {
    // Properti dengan tingkat akses public, dapat diakses dari luar class
    public $merk;
    public $warna;

    // Properti dengan tingkat akses private, hanya bisa diakses di dalam class
    private $harga;

    // Constructor untuk menginisialisasi properti
    public function __construct($merk, $warna, $harga) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    // Metode untuk mengakses harga melalui metode public
    public function getHarga() {
        return $this->harga;
    }

    // Metode untuk mengubah harga
    public function setHarga($harga) {
        if ($harga > 0) {
            $this->harga = $harga;
        } else {
            echo "Harga tidak valid!";
        }
    }

    // Metode untuk menampilkan informasi mobil
    public function tampilkanInfo() {
        echo "Mobil $this->merk berwarna $this->warna dan harganya adalah $this->harga.";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah", 200000000);

// Mengakses properti public
echo $mobil1->merk;  // Output: Toyota

// Mengakses dan mengubah properti private melalui metode public
$mobil1->setHarga(250000000);
echo "<br>Harga setelah diubah: " . $mobil1->getHarga();  // Output: Harga setelah diubah: 250000000

// Menampilkan informasi mobil
echo "<br>";
$mobil1->tampilkanInfo();  // Output: Mobil Toyota berwarna Merah dan harganya adalah 250000000.
?>
Penjelasan:
Properti public ($merk dan $warna): Dapat diakses langsung dari objek atau di luar class.

Misalnya, $mobil1->merk langsung mengakses properti merk pada objek $mobil1.
Properti private ($harga): Tidak bisa diakses langsung dari luar class.

Untuk mengakses atau mengubah properti harga, kita menggunakan metode getter (getHarga()) dan setter (setHarga()), yang diatur dalam class Mobil.
Metode setHarga(): Mengatur harga, dan hanya menerima nilai harga yang valid (lebih besar dari 0).

Metode getHarga(): Mengambil nilai harga dan mengembalikannya.

Dengan menggunakan properti di dalam class, Anda bisa menyimpan data spesifik yang dimiliki oleh setiap objek, serta mengontrol akses dan manipulasi data tersebut dengan mengatur visibilitas properti menggunakan public, protected, atau private.