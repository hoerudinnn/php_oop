Constant dalam Object-Oriented Programming (OOP) pada PHP adalah nilai yang bersifat tetap atau tidak dapat diubah selama eksekusi program. Konstanta dalam class digunakan untuk menyimpan nilai yang bersifat konstan, seperti nilai pi, status, atau informasi lain yang tidak boleh diubah.

Di dalam class, konstanta didefinisikan dengan kata kunci const dan diakses menggunakan ClassName::CONSTANT_NAME atau self::CONSTANT_NAME jika diakses dari dalam class itu sendiri.

Karakteristik Konstanta dalam Class
Tidak Dapat Diubah: Setelah didefinisikan, nilai konstanta tidak bisa diubah.
Tidak Memerlukan $: Berbeda dengan variabel, konstanta tidak menggunakan tanda $.
Akses melalui Scope Resolution Operator ::: Konstanta diakses dengan menggunakan ClassName::CONSTANT_NAME dari luar class atau self::CONSTANT_NAME dari dalam class.
Contoh Penggunaan Konstanta dalam Class
Misalkan kita memiliki class Lingkaran yang menggunakan konstanta PI untuk perhitungan matematika.

php
Copy code
<?php
class Lingkaran {
    // Mendefinisikan konstanta dalam class
    const PI = 3.14159;

    // Method untuk menghitung luas lingkaran
    public function hitungLuas($jariJari) {
        return self::PI * $jariJari * $jariJari;
    }

    // Method untuk menghitung keliling lingkaran
    public function hitungKeliling($jariJari) {
        return 2 * self::PI * $jariJari;
    }
}
?>
Menggunakan Konstanta dalam Class
php
Copy code
<?php
$lingkaran = new Lingkaran();
$jariJari = 5;

// Mengakses konstanta PI dari luar class
echo "Nilai PI: " . Lingkaran::PI . "<br>"; // Output: Nilai PI: 3.14159

// Menghitung luas lingkaran
echo "Luas Lingkaran: " . $lingkaran->hitungLuas($jariJari) . "<br>"; // Output: Luas Lingkaran: 78.53975

// Menghitung keliling lingkaran
echo "Keliling Lingkaran: " . $lingkaran->hitungKeliling($jariJari) . "<br>"; // Output: Keliling Lingkaran: 31.4159
?>
Penjelasan
Konstanta PI: const PI = 3.14159; adalah konstanta dalam class Lingkaran. Konstanta ini akan digunakan dalam perhitungan luas dan keliling lingkaran.
Mengakses Konstanta:
Dari Luar Class: Lingkaran::PI digunakan untuk mengakses nilai konstanta PI tanpa perlu membuat instance dari class.
Dari Dalam Class: self::PI digunakan untuk mengakses nilai konstanta PI dari dalam class Lingkaran (misalnya di dalam metode hitungLuas() dan hitungKeliling()).
Pewarisan Konstanta dalam Subclass
Jika class memiliki subclass, konstanta dapat diakses di subclass, namun tidak dapat diubah.

php
Copy code
<?php
class BangunDatar {
    const SATUAN = "cm";
}

class Persegi extends BangunDatar {
    public function tampilkanSatuan() {
        return self::SATUAN;
    }
}

$persegi = new Persegi();
echo "Satuan: " . $persegi->tampilkanSatuan(); // Output: Satuan: cm
?>
Dalam contoh ini, subclass Persegi mewarisi konstanta SATUAN dari BangunDatar dan dapat menggunakannya, tetapi tidak dapat mengubahnya.

Kesimpulan
Konstanta dalam class PHP adalah nilai tetap yang digunakan untuk data yang tidak berubah sepanjang program.
Konstanta diakses menggunakan ClassName::CONSTANT_NAME dari luar class atau self::CONSTANT_NAME dari dalam class.
Konstanta bisa diwariskan ke subclass, tetapi nilainya tetap dan tidak dapat diubah.