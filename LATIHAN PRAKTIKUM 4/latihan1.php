<?php
declare(strict_types=1);

class Mahasiswa {
    // Menggunakan Constructor Property Promotion (PHP 8+)
    public function __construct(
        public string $nim,
        public string $nama,
        public int $semester = 1,
        public string $fakultas = "Belum diisi" // Parameter dengan nilai default
    ) {}

    public function profil(): string {
        return "NIM: $this->nim | Nama: $this->nama | Semester: $this->semester | Fakultas: $this->fakultas";
    }
}

// 1. Objek Pertama: Mengisi parameter fakultas secara eksplisit
$mhs1 = new Mahasiswa('231001', 'Oscar', 3, 'Sains dan Teknologi');

// 2. Objek Kedua: Mengabaikan argumen fakultas (menggunakan nilai default)
$mhs2 = new Mahasiswa('231002', 'Nabila', 1);

// Menampilkan hasil perbandingan
echo "<b>Objek 1 (Fakultas diisi):</b><br>";
echo $mhs1->profil() . "<br><br>";

echo "<b>Objek 2 (Fakultas menggunakan nilai default):</b><br>";
echo $mhs2->profil() . "<br>";
?>