Encapsulation (enkapsulasi) adalah prinsip dalam Object-Oriented Programming (OOP) yang bertujuan untuk membatasi akses langsung ke data dalam suatu objek dan hanya membiarkan data tersebut diakses atau diubah melalui metode yang telah didefinisikan. Ini membantu menjaga integritas dan keamanan data dalam objek, sekaligus menyembunyikan detail implementasi internal dari pengguna.

Di PHP, encapsulation dilakukan dengan mengatur visibilitas dari properti dan metode di dalam class. Ada tiga jenis visibilitas utama:

Public: Properti atau metode yang ditandai sebagai public dapat diakses dari mana saja, baik dari dalam class itu sendiri, dari subclass, maupun dari luar class.

Protected: Properti atau metode protected hanya bisa diakses dari dalam class itu sendiri dan dari subclass. Artinya, properti atau metode ini tidak dapat diakses langsung dari luar class.

Private: Properti atau metode private hanya dapat diakses dari dalam class itu sendiri. Private sangat melindungi data dari akses luar atau bahkan dari subclass.

Contoh Penggunaan Visibilitas dan Encapsulation di PHP
Misalkan kita memiliki class AkunBank dengan properti saldo yang ingin kita lindungi agar tidak bisa diakses atau diubah langsung dari luar class. Kita juga ingin menambahkan metode untuk menambah atau mengambil saldo.

php
Copy code
<?php
class AkunBank {
    // Properti dengan visibilitas private
    private $saldo;

    // Konstruktor untuk menginisialisasi saldo awal
    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    // Metode public untuk menambah saldo
    public function tambahSaldo($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Saldo berhasil ditambahkan. Saldo sekarang: " . $this->saldo . "<br>";
        } else {
            echo "Jumlah yang ditambahkan harus lebih besar dari nol.<br>";
        }
    }

    // Metode public untuk mengambil saldo
    public function ambilSaldo($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "Saldo berhasil diambil. Saldo sekarang: " . $this->saldo . "<br>";
        } else {
            echo "Jumlah yang diambil tidak valid atau saldo tidak mencukupi.<br>";
        }
    }

    // Metode public untuk mengecek saldo
    public function cekSaldo() {
        echo "Saldo saat ini: " . $this->saldo . "<br>";
    }
}
?>
Menggunakan Encapsulation dan Visibilitas dalam Program
php
Copy code
<?php
// Membuat objek dari class AkunBank
$akun1 = new AkunBank(1000000); // Menginisialisasi dengan saldo awal 1.000.000

// Mengakses saldo melalui metode public
$akun1->cekSaldo();           // Output: Saldo saat ini: 1000000
$akun1->tambahSaldo(500000);   // Output: Saldo berhasil ditambahkan. Saldo sekarang: 1500000
$akun1->ambilSaldo(300000);    // Output: Saldo berhasil diambil. Saldo sekarang: 1200000

// Mencoba akses langsung properti saldo (akan gagal)
// $akun1->saldo = 500000; // Error: Cannot access private property AkunBank::$saldo
?>
Penjelasan:
Private Property saldo: Dengan menjadikan $saldo sebagai private, kita melindungi properti ini dari akses langsung atau perubahan dari luar class.
Public Methods: Metode tambahSaldo(), ambilSaldo(), dan cekSaldo() berfungsi sebagai interface atau antarmuka yang aman untuk mengakses dan memodifikasi saldo. Pengguna hanya bisa berinteraksi dengan saldo melalui metode ini, yang telah dikendalikan oleh aturan dalam class.
Validasi dan Keamanan Data: Dalam metode tambahSaldo() dan ambilSaldo(), kita bisa menerapkan validasi, seperti memastikan jumlahnya positif dan tidak melebihi saldo yang ada. Ini menjaga agar tidak ada perubahan tidak sah pada data.
Keuntungan Encapsulation:
Pengendalian Akses: Hanya metode yang diberikan yang dapat mengubah atau mengambil data, menghindari perubahan yang tidak diinginkan.
Modularitas: Encapsulation membuat kode lebih modular dan mudah dirawat karena data hanya bisa diakses melalui metode tertentu.
Keamanan: Melindungi data sensitif agar tidak bisa diakses sembarangan.
Fleksibilitas: Anda bisa mengubah implementasi internal class tanpa memengaruhi kode yang menggunakan class tersebut.
Kesimpulan
Dengan encapsulation dan visibilitas public, protected, dan private, Anda bisa mengatur cara data di dalam class dapat diakses atau diubah. Ini adalah prinsip penting dalam OOP yang membantu menjaga integritas data, membuat kode lebih aman, dan memungkinkan perbaikan atau perubahan internal tanpa memengaruhi penggunaan class dari luar.