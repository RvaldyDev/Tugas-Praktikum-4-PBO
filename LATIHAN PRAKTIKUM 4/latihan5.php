<?php
declare(strict_types=1);

class LaporanMahasiswa {
    public function __construct(
        public string $nim,
        public string $nama,
        public string $jurusan = "Informatika"
    ) {}

    // Magic method __call() memicu saat memanggil method yang tidak ada/tidak publik
    public function __call(string $method, array $args): mixed {
        // Hanya mengizinkan method 'cetakRingkas'
        if ($method === 'cetakRingkas') {
            return "<b>[Laporan Ringkas]</b> NIM: $this->nim | Nama: $this->nama | Jurusan: $this->jurusan";
        }

        // Lempar BadMethodCallException jika method tidak dikenal
        throw new BadMethodCallException("Error: Method '$method()' tidak tersedia atau tidak diizinkan pada class " . __CLASS__);
    }
}

// === PENGUJIAN KODE ===
$laporan = new LaporanMahasiswa('231001', 'Alya');

echo "<h3>Pengujian Method Overloading (__call)</h3>";

// 1. Pengujian Method yang Diizinkan ('cetakRingkas')
echo "<b>1. Memanggil Method yang Diizinkan ('cetakRingkas'):</b><br>";
try {
    echo $laporan->cetakRingkas() . "<br><br>"; 
} catch (BadMethodCallException $e) {
    echo "Pesan Exception: " . $e->getMessage() . "<br><br>";
}

// 2. Pengujian Method yang Tidak Dikenal ('hitungIPK')
echo "<b>2. Memmanggil Method yang Tidak Dikenal ('hitungIPK'):</b><br>";
try {
    // Memanggil method yang tidak ada untuk memicu exception
    echo $laporan->hitungIPK() . "<br>";
} catch (BadMethodCallException $e) {
    // Menangkap exception dan mencatat pesan kesalahannya
    echo "<span style='color:red;'><b>Catatan Exception Tertangkap:</b> " . $e->getMessage() . "</span><br>";
}
?>