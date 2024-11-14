Dalam pewarisan (inheritance), static property dan static method pada suatu class dapat diwariskan ke subclass, sama seperti properti atau metode biasa. Namun, karena sifatnya yang static, properti dan metode ini tetap berada di tingkat class, bukan pada instance, sehingga dapat diakses melalui nama class induk atau subclass secara langsung.

Berikut ini penjelasan dan contoh tentang cara menggunakan static property dan static method yang diwariskan ke subclass.

Contoh Pewarisan Static Property dan Static Method
Misalkan kita memiliki class induk BangunDatar yang memiliki static property bernama $satuan untuk menyimpan satuan pengukuran (misalnya, "cm"), dan static method untuk mengatur atau mengambil nilai satuan tersebut. Kemudian kita membuat subclass Persegi yang mewarisi properti dan metode static dari BangunDatar.

Contoh Kode
php
Copy code
<?php
class BangunDatar {
    // Static property yang akan diwariskan
    protected static $satuan = "cm";

    // Static method untuk mengatur nilai satuan
    public static function setSatuan($satuanBaru) {
        self::$satuan = $satuanBaru;
    }

    // Static method untuk mengambil nilai satuan
    public static function getSatuan() {
        return self::$satuan;
    }
}

class Persegi extends BangunDatar {
    // Static method untuk menghitung luas persegi
    public static function hitungLuas($sisi) {
        return $sisi * $sisi . " " . self::$satuan . "²";
    }

    // Static method untuk menghitung keliling persegi
    public static function hitungKeliling($sisi) {
        return 4 * $sisi . " " . self::$satuan;
    }
}
?>
Menggunakan Static Property dan Static Method di Subclass
php
Copy code
<?php
// Menggunakan static property dari class induk
echo "Satuan default: " . Persegi::getSatuan() . "<br>"; // Output: Satuan default: cm

// Mengubah nilai static property melalui static method
Persegi::setSatuan("meter");

// Menggunakan static method dari subclass
$sisi = 5;
echo "Luas Persegi: " . Persegi::hitungLuas($sisi) . "<br>";       // Output: Luas Persegi: 25 meter²
echo "Keliling Persegi: " . Persegi::hitungKeliling($sisi) . "<br>"; // Output: Keliling Persegi: 20 meter

// Static property 'satuan' akan tetap sama untuk class BangunDatar dan subclass Persegi
echo "Satuan setelah perubahan: " . BangunDatar::getSatuan() . "<br>"; // Output: Satuan setelah perubahan: meter
?>
Penjelasan:
Static Property $satuan: Static property $satuan didefinisikan di class BangunDatar dan diakses dari subclass Persegi. Ketika setSatuan() dipanggil dari subclass untuk mengubah satuan menjadi "meter", perubahan ini berlaku untuk seluruh class yang mewarisi property tersebut, baik BangunDatar maupun Persegi.

Static Method setSatuan() dan getSatuan(): Metode ini digunakan untuk mengatur dan mendapatkan nilai $satuan. Karena self::$satuan digunakan dalam static method ini, properti tersebut tetap mengacu pada $satuan di level class BangunDatar, dan perubahan di Persegi juga mempengaruhi BangunDatar.

Static Method di Subclass: Persegi memiliki metode hitungLuas() dan hitungKeliling() yang menggunakan self::$satuan. Mereka dapat mengakses static property yang diwariskan dari BangunDatar, jadi tidak perlu mendefinisikan ulang $satuan di Persegi.

Catatan:
self:: merujuk ke class di mana static property atau method didefinisikan. Jika Anda ingin menggunakan static property atau method yang mungkin di-overwrite di subclass, gunakan static:: untuk late static binding.
Perubahan pada static property di subclass akan mempengaruhi seluruh class dalam hierarki pewarisan yang menggunakan properti tersebut.
Kesimpulan
Dengan pewarisan, subclass dapat mewarisi dan menggunakan static property dan static method dari superclass. Static property bersifat "global" di tingkat class, sehingga perubahan pada satu static property di satu class akan mempengaruhi semua class dalam hierarki tersebut yang mewarisi atau mengakses property yang sama.