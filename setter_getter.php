Setter dan Getter adalah metode dalam Object-Oriented Programming (OOP) yang digunakan untuk mengakses dan memodifikasi nilai dari properti dalam suatu objek secara aman. Mereka merupakan bagian penting dari prinsip encapsulation yang memastikan data dalam objek tidak bisa diakses atau dimodifikasi secara langsung, terutama untuk properti dengan visibilitas private atau protected.

Getter: Metode yang digunakan untuk mendapatkan nilai dari properti yang bersifat private atau protected.
Setter: Metode yang digunakan untuk mengatur atau mengubah nilai dari properti tersebut, biasanya dengan pengecekan tertentu untuk memastikan nilai yang diberikan valid.
Contoh Implementasi Setter dan Getter dalam PHP
Misalnya, kita memiliki class Produk dengan properti nama dan harga yang bersifat private. Dengan setter dan getter, kita dapat mengakses dan mengubah nilai properti ini tanpa mempengaruhi keamanan data.

php
Copy code
<?php
class Produk {
    // Properti dengan visibilitas private
    private $nama;
    private $harga;

    // Setter untuk mengatur nilai nama produk
    public function setNama($nama) {
        if (is_string($nama) && strlen($nama) > 0) {
            $this->nama = $nama;
        } else {
            echo "Nama produk harus berupa string yang tidak kosong.<br>";
        }
    }

    // Getter untuk mendapatkan nilai nama produk
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk mengatur nilai harga produk
    public function setHarga($harga) {
        if (is_numeric($harga) && $harga > 0) {
            $this->harga = $harga;
        } else {
            echo "Harga harus berupa angka positif.<br>";
        }
    }

    // Getter untuk mendapatkan nilai harga produk
    public function getHarga() {
        return $this->harga;
    }
}
?>
Menggunakan Setter dan Getter dalam Program
php
Copy code
<?php
// Membuat objek dari class Produk
$produk1 = new Produk();

// Mengatur nilai properti menggunakan setter
$produk1->setNama("Laptop");
$produk1->setHarga(15000000);

// Mendapatkan nilai properti menggunakan getter
echo "Nama Produk: " . $produk1->getNama() . "<br>";   // Output: Nama Produk: Laptop
echo "Harga Produk: Rp " . $produk1->getHarga() . "<br>"; // Output: Harga Produk: Rp 15000000

// Contoh input yang tidak valid
$produk1->setHarga(-2000); // Output: Harga harus berupa angka positif.
?>
Penjelasan:
Setter setNama() dan setHarga(): Metode ini berfungsi untuk mengatur nilai dari properti nama dan harga. Pada setHarga(), ada validasi tambahan untuk memastikan bahwa harga harus berupa angka positif. Ini memastikan data yang masuk memenuhi kriteria tertentu dan membantu mencegah kesalahan.

Getter getNama() dan getHarga(): Metode ini berfungsi untuk mengambil nilai dari properti nama dan harga. Dengan getter, kita dapat mengakses nilai yang disimpan tanpa mengizinkan perubahan dari luar.

Validasi Input: Validasi dalam setter (setNama dan setHarga) mencegah data yang tidak valid disimpan dalam objek. Ini membantu menjaga integritas data.

Manfaat Menggunakan Setter dan Getter
Kontrol Penuh atas Properti: Dengan setter dan getter, kita dapat mengontrol bagaimana properti dapat diakses atau diubah.
Enkapsulasi: Membantu menjaga data agar tidak diakses secara langsung, melainkan melalui metode yang telah diatur.
Validasi: Setter memungkinkan kita melakukan validasi atau pengecekan sebelum mengubah nilai properti, memastikan hanya data valid yang masuk.
Fleksibilitas: Jika ada perubahan di cara data disimpan atau diperoleh, perubahan hanya perlu dilakukan di dalam metode getter atau setter tanpa mempengaruhi kode lain.
Kesimpulan
Setter dan getter adalah metode penting dalam OOP yang memanfaatkan enkapsulasi untuk melindungi data dari akses langsung. Dengan ini, kita bisa memastikan data tetap aman, mudah diatur, dan lebih fleksibel saat diperlukan validasi.