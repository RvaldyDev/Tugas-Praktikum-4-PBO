<?php
declare(strict_types=1);

class Buku {
    // Constructor untuk menginisialisasi atribut
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {
        echo "[Constructor] Objek buku '<b>$this->judul</b>' berhasil dibuat.<br>";
    }

    public function tampilInfo(): string {
        return "Judul: $this->judul | Penulis: $this->penulis";
    }

// Destructor demonstrasi untuk memantau pembersihan objek di memori
    public function __destruct() {
        echo "<b style='color:red;'>[Destructor] Objek buku '$this->judul' dihancurkan dari memori!</b><br>";
    }
}

echo "=== 1. Membuat Objek Asli ===<br>";
$buku1 = new Buku("Pemrograman Berorientasi Objek", "Prajoko", 2024);

echo "<br>=== 2. Membuat Alias (Referensi Tambahan ke Objek yang Sama) ===<br>";
$aliasBuku = $buku1; // $aliasBuku dan $buku1 menunjuk ke satu objek yang sama di memori

echo "<br>=== 3. Memanggil unset(\$buku1) ===<br>";
unset($buku1); // Menghapus variabel $buku1
echo "Variabel \$buku1 telah di-unset. Namun objek masih dapat diakses via \$aliasBuku: <br>";
echo $aliasBuku->tampilInfo() . "<br>";

echo "<br>=== 4. Memanggil unset(\$aliasBuku) ===<br>";
unset($aliasBuku); // Menghapus referensi terakhir menuju objek
echo "Variabel \$aliasBuku telah di-unset.<br>";

echo "<br>=== 5. Akhir Skrip Program ===<br>";
?>