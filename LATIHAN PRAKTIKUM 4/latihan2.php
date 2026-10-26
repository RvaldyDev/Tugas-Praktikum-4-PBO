<?php
declare(strict_types=1);

class Buku {
    // Menggunakan Constructor Property Promotion (PHP 8+)
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {}

    // Method untuk menampilkan informasi buku
    public function tampilInfo(): string {
        return "Judul: <i>$this->judul</i> | Penulis: $this->penulis | Tahun Terbit: $this->tahun";
    }
}

// Membentuk 3 objek dari class Buku
$buku1 = new Buku("Pemrograman Berorientasi Objek dengan PHP", "Prajoko", 2024);
$buku2 = new Buku("Clean Code: A Handbook of Agile Software Craftsmanship", "Robert C. Martin", 2008);
$buku3 = new Buku("Design Patterns: Elements of Reusable Object-Oriented Software", "Erich Gamma et al.", 1994);

// Menampilkan informasi ketiga objek buku
echo "<h3>Daftar Koleksi Buku</h3>";
echo "1. " . $buku1->tampilInfo() . "<br><br>";
echo "2. " . $buku2->tampilInfo() . "<br><br>";
echo "3. " . $buku3->tampilInfo() . "<br>";
?>