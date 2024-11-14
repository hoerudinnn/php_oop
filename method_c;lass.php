Method dalam Object-Oriented Programming (OOP) adalah fungsi yang didefinisikan di dalam sebuah class. Method mendeskripsikan perilaku yang dapat dilakukan oleh objek yang dihasilkan dari class tersebut. Method bisa digunakan untuk mengakses atau memodifikasi properti objek, atau menjalankan aksi tertentu yang berhubungan dengan objek tersebut.

Jenis-Jenis Method dalam PHP:
Method Instance: Method yang dipanggil pada objek tertentu dari class.
Method Static: Method yang dipanggil langsung dari class, bukan dari objeknya.
Method Konstruktor: Metode khusus yang dipanggil saat objek dibuat, yaitu __construct().
1. Method Instance
Method instance adalah metode yang digunakan untuk objek tertentu. Untuk memanggil metode ini, Anda harus memiliki objek terlebih dahulu.

Contoh:

php
Copy code
<?php
class Mobil {
    public $merk;
    public $warna;

    // Constructor untuk inisialisasi properti
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Method untuk menampilkan informasi mobil
    public function tampilkanInfo() {
        echo "Mobil $this->merk berwarna $this->warna.";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah");

// Memanggil method instance menggunakan objek
$mobil1->tampilkanInfo();  // Output: Mobil Toyota berwarna Merah.
?>
Penjelasan:

tampilkanInfo() adalah method instance yang memanggil data merk dan warna dari objek yang dibuat ($mobil1).
Anda perlu menggunakan objek ($mobil1->tampilkanInfo()) untuk memanggil method ini.
2. Method Static
Method static adalah metode yang dipanggil tanpa membuat objek terlebih dahulu. Method ini dipanggil langsung dari class itu sendiri.

Contoh:

php
Copy code
<?php
class Mobil {
    public static $jumlahMobil = 0;

    // Method static untuk menambah jumlah mobil
    public static function tambahMobil() {
        self::$jumlahMobil++;
    }

    // Method static untuk menampilkan jumlah mobil
    public static function tampilkanJumlahMobil() {
        echo "Jumlah mobil: " . self::$jumlahMobil;
    }
}

// Memanggil method static tanpa membuat objek
Mobil::tambahMobil();
Mobil::tambahMobil();
Mobil::tampilkanJumlahMobil();  // Output: Jumlah mobil: 2
?>
Penjelasan:

tambahMobil() adalah method static yang meningkatkan nilai jumlahMobil.
tampilkanJumlahMobil() adalah method static yang menampilkan jumlah mobil.
Method static dipanggil dengan menggunakan nama class dan operator :: (misalnya Mobil::tambahMobil()), tanpa memerlukan objek.
3. Method Konstruktor (__construct())
Method konstruktor adalah metode khusus yang dipanggil secara otomatis saat objek dibuat. Fungsi konstruktor biasanya digunakan untuk menginisialisasi properti objek.

Contoh:

php
Copy code
<?php
class Mobil {
    public $merk;
    public $warna;

    // Konstruktor untuk inisialisasi properti
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
        echo "Objek mobil dengan merk $merk dan warna $warna telah dibuat.<br>";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah");  // Output: Objek mobil dengan merk Toyota dan warna Merah telah dibuat.
?>
Penjelasan:

__construct() adalah metode konstruktor yang dipanggil saat objek baru dibuat.
Pada saat objek $mobil1 dibuat, konstruktor otomatis menginisialisasi properti merk dan warna dan menampilkan pesan.
4. Method Destruktor (__destruct())
Method destruktor adalah metode khusus yang dipanggil ketika objek dihancurkan atau tidak lagi digunakan. Fungsi destruktor biasanya digunakan untuk membersihkan atau menutup resource yang digunakan oleh objek.

Contoh:

php
Copy code
<?php
class Mobil {
    public $merk;

    public function __construct($merk) {
        $this->merk = $merk;
        echo "Objek mobil $merk dibuat.<br>";
    }

    public function __destruct() {
        echo "Objek mobil $this->merk dihancurkan.<br>";
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota");
unset($mobil1);  // Menghancurkan objek $mobil1
?>
Penjelasan:

__destruct() dipanggil saat objek dihancurkan (misalnya menggunakan unset()).
Ketika objek $mobil1 dihancurkan, pesan "Objek mobil Toyota dihancurkan." akan ditampilkan.
5. Method Akses Properti
Dalam OOP, Anda bisa membuat method yang memungkinkan untuk mengakses dan mengubah nilai properti yang private atau protected. Hal ini sering dilakukan menggunakan metode getter dan setter.

Contoh:

php
Copy code
<?php
class Mobil {
    private $harga;

    // Setter untuk mengubah harga
    public function setHarga($harga) {
        if ($harga > 0) {
            $this->harga = $harga;
        } else {
            echo "Harga tidak valid!";
        }
    }

    // Getter untuk mengambil harga
    public function getHarga() {
        return $this->harga;
    }
}

// Membuat objek dari class Mobil
$mobil1 = new Mobil();
$mobil1->setHarga(200000000);  // Mengubah harga melalui setter
echo "Harga mobil: " . $mobil1->getHarga();  // Output: Harga mobil: 200000000
?>
Penjelasan:

setHarga() adalah metode setter yang digunakan untuk mengubah nilai properti harga.
getHarga() adalah metode getter yang digunakan untuk mengambil nilai properti harga.
Kesimpulan
Method Instance digunakan untuk melakukan aksi pada objek.
Method Static digunakan untuk melakukan aksi pada class itu sendiri, tanpa membutuhkan objek.
Konstruktor digunakan untuk menginisialisasi objek saat pertama kali dibuat.
Destruktor digunakan untuk membersihkan objek saat objek tidak digunakan lagi.
Getter/Setter digunakan untuk mengakses dan memodifikasi properti yang memiliki akses terbatas (misalnya private).
Dengan memahami berbagai jenis metode dalam class OOP, Anda dapat membuat class yang lebih fleksibel dan dapat mengontrol akses ke data dan perilaku objek dengan lebih baik.