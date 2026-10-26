# Praktikum Pemrograman Berorientasi Objek (PBO) - Pertemuan 4

Dokumentasi dan repositori tugas/praktikum mata kuliah **Pemrograman Berorientasi Objek (PBO)** Pertemuan 4.

---

## 📌 Topik Pembahasan
- **Constructor (`__construct`)**: Inisialisasi keadaan awal objek dan penerapan *Constructor Property Promotion* (PHP 8+).
- **Destructor (`__destruct`)**: Pemahaman siklus hidup objek serta analisis pengaruh referensi/`unset()`.
- **Overloading pada PHP**: Akses dinamis properti dan metode menggunakan *Magic Methods* (`__get`, `__set`, `__isset`, `__unset`, dan `__call`).

---

## 📁 Struktur File & Folder

```text
praktikum_04/
├── LATIHAN PRAKTIKUM 4/
│   ├── latihan1.php      # Constructor & parameter nilai default
│   ├── latihan2.php      # Class Buku dengan Constructor
│   ├── latihan3.php      # Demonstrasi Destructor & alias referensi objek
│   ├── latihan4.php      # Property Overloading (__get, __set, __isset, __unset)
│   └── latihan5.php      # Method Overloading dengan __call() & BadMethodCallException
├── DataMahasiswa.php     # Class pengelolaan data (CRUD)
├── Mahasiswa.php         # Class Mahasiswa utama
├── index.php             # Antarmuka web utama / form studi kasus
├── demo_konsep.php       # Demonstrasi ringkas alur kerja OOP Pertemuan 4
└── README.md             # Dokumentasi repositori
