Static Property dan Static Method adalah elemen dalam Object-Oriented Programming (OOP) yang diakses langsung melalui class tanpa perlu membuat instance (objek) dari class tersebut.

Konsep Static Property dan Static Method
Static Property: Properti yang ditandai sebagai static dan disimpan di level class, bukan di level objek. Static property ini bersifat global dalam konteks class itu sendiri, sehingga dapat diakses dan dimodifikasi dari mana saja melalui class tanpa membuat objek baru.

Static Method: Metode yang ditandai sebagai static dan hanya dapat mengakses atau memodifikasi properti atau metode lain yang bersifat static dalam class. Static method ini juga dapat dipanggil tanpa membuat instance dari class.

Untuk mengakses static property atau static method, digunakan ClassName::nama_property atau ClassName::nama_method.

Contoh Penggunaan Static Property dan Static Method di PHP
Misalkan kita memiliki class Matematika yang menyimpan operasi matematika dasar dan sebuah properti PI yang berfungsi sebagai konstanta untuk nilai pi.

php
Copy code
<?php
class Matematika {
    // Static property untuk nilai pi
    public static $PI = 3.14159;

    // Static method untuk menghitung luas lingkaran
    public static function hitungLuasLingkaran($jariJari) {
        return self::$PI * $jariJari * $jariJari;
    }

    // Static method untuk menghitung keliling lingkaran
    public static function hitungKelilingLingkaran($jariJari) {
        return 2 * self::$PI * $jariJari;
    }
}
?>
Menggunakan Static Property dan Static Method
php
Copy code
<?php
// Mengakses static property
echo "Nilai PI: " . Matematika::$PI . "<br>"; // Output: Nilai PI: 3.14159

// Memanggil static method untuk menghitung luas lingkaran
$jariJari = 5;
echo "Luas Lingkaran: " . Matematika::hitungLuasLingkaran($jariJari) . "<br>"; // Output: Luas Lingkaran: 78.53975

// Memanggil static method untuk menghitung keliling lingkaran
echo "Keliling Lingkaran: " . Matematika::hitungKelilingLingkaran($jariJari) . "<br>"; // Output: Keliling Lingkaran: 31.4159
?>
Penjelasan:
Static Property $PI: Properti ini disimpan dalam class Matematika sebagai konstanta nilai pi, yang dapat diakses melalui Matematika::$PI tanpa perlu membuat objek Matematika.

Static Methods hitungLuasLingkaran() dan hitungKelilingLingkaran(): Kedua metode ini mengakses nilai $PI langsung melalui self::$PI untuk menghitung luas dan keliling lingkaran. Karena metode ini static, mereka dapat dipanggil secara langsung dengan Matematika::hitungLuasLingkaran().

Menggunakan self:: untuk Static Property: Dalam static method, kita menggunakan self:: untuk mengakses static property di dalam class.

Manfaat Menggunakan Static Property dan Static Method
Tidak Perlu Instance: Static property dan method bisa digunakan tanpa perlu membuat instance dari class, memudahkan akses ke elemen yang sifatnya tidak bergantung pada instance.
Penyimpanan Data Bersama: Static property cocok untuk menyimpan data yang sifatnya umum atau global dalam satu class, seperti nilai konstanta.
Peningkatan Efisiensi: Static method sangat berguna untuk fungsi-fungsi yang umum, seperti operasi matematika atau utilitas yang tidak memerlukan data khusus dari objek.
Kesimpulan
Static property dan method berguna untuk data dan fungsi yang tidak bergantung pada instance dan bisa digunakan di seluruh class tanpa membuat objek. Ini berguna untuk membuat class lebih efisien dan mudah diakses ketika ada informasi atau operasi yang bersifat umum.