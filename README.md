# 🚀 Praktikum Pemrograman Berorientasi Objek (PBO) - Pertemuan 4

Dokumentasi dan repositori tugas/praktikum mata kuliah **Pemrograman Berorientasi Objek (PBO)** Pertemuan 4[cite: 1, 21].

---

## 👨‍💻 Identitas Mahasiswa

| Informasi | Detail |
| :--- | :--- |
| **Nama Lengkap** | Sanziya Rivaldi |
| **NIM** | 2530521070 |
| **Program Studi** | Teknik Informatika / Ilmu Komputer |
| **Fakultas** | Sains dan Teknologi |
| **Instansi** | Universitas Muhammadiyah Sukabumi |
| **Mata Kuliah** | Pemrograman Berorientasi Objek (PBO) |
| **Dosen Pengampu**| Prajoko, M.Kom |

<p align="left">
  <a href="https://github.com/RvaldyDev">
    <img src="https://img.shields.io/badge/GitHub-RvaldyDev-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub Badge">
  </a>
  <img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Badge">
  <img src="https://img.shields.io/badge/Environment-Laragon%20%2F%20XAMPP-007ACC?style=for-the-badge&logo=visualstudiocode&logoColor=white" alt="Dev Badge">
</p>

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
