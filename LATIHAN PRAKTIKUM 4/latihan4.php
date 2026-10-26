<?php
declare(strict_types=1);

class Mahasiswa {
    // Array private untuk menyimpan atribut dinamis
    private array $atributTambahan = [];

    public function __construct(
        public string $nim,
        public string $nama
    ) {}

    public function __set(string $key, mixed $value): void {
        echo "<span style='color:blue;'>[__set] Menyimpan atribut dinamis '$key' = '$value'</span><br>";
        $this->atributTambahan[$key] = $value;
    }

    public function __get(string $key): mixed {
        echo "<span style='color:green;'>[__get] Membaca atribut dinamis '$key'</span><br>";
        if (array_key_exists($key, $this->atributTambahan)) {
            return $this->atributTambahan[$key];
        }
        return "<i>Atribut '$key' belum diisi.</i>";
    }

    public function __isset(string $key): bool {
        echo "<span style='color:purple;'>[__isset] Memeriksa keberadaan atribut '$key'</span><br>";
        return isset($this->atributTambahan[$key]);
    }
    
    public function __unset(string $key): void {
        echo "<span style='color:red;'>[__unset] Menghapus atribut dinamis '$key'</span><br>";
        unset($this->atributTambahan[$key]);
    }
}

// === PENGUJAN MAGIC METHODS ===
$mhs = new Mahasiswa('231001', 'Alya');

echo "<h3>Pengujian Magic Methods (Property Overloading)</h3>";

echo "<b>1. Menulis Atribut Dinamis 'hobi':</b><br>";
$mhs->hobi = "Membaca Buku"; // Memicu __set()
echo "<br>";
echo "<b>2. Membaca Atribut Dinamis 'hobi':</b><br>";
echo "Hobi Alya: " . $mhs->hobi . "<br><br>"; // Memicu __get()
echo "<b>3. Memeriksa Apakah Atribut 'hobi' Ada (isset):</b><br>";
if (isset($mhs->hobi)) { // Memicu __isset()
    echo "Atribut 'hobi' ditemukan!<br><br>";
}

echo "<b>4. Menghapus Atribut Dinamis 'hobi' (unset):</b><br>";
unset($mhs->hobi); // Memicu __unset()
echo "<br>";


echo "<b>5. Membaca Kembali Atribut 'hobi' Setelah unset:</b><br>";
echo $mhs->hobi . "<br>";
?>