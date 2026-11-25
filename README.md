# Praktikum PBO Pertemuan 8 — Overloading dan Overriding (PHP 8+)

Jalankan dari folder ini:  `php nama_file.php`  (CRUD: `php -S localhost:8000` lalu buka `index.php`).

| File | Perintah | Keluaran yang diharapkan |
|---|---|---|
| contoh2_variadic.php | php contoh2_variadic.php | `30`, `60`, lalu 2 baris TypeError, lalu `add() tanpa argumen = 0` |
| contoh3_call.php | php contoh3_call.php | `Name: Ahmad`, `ID: 2026001, Name: Ahmad`, 2x `InvalidArgumentException: Expected 1 or 2 strings`, `BadMethodCallException: Unknown method: hapusData` |
| contoh4_override.php | php contoh4_override.php | `Active Student`, `Active Student - Scholarship Recipient` |
| contoh5_final.php | php contoh5_final.php | `R-01 - Custom Report` |
| contoh5_error_final.php | php contoh5_error_final.php | Fatal error: Cannot override final method BaseReport::getId() |
| contoh5_error_signature.php | php contoh5_error_signature.php | Fatal error: Declaration of CustomReport::title(): int must be compatible with BaseReport::title(): string |
| contoh5_error_visibility.php | php contoh5_error_visibility.php | Fatal error: Access level to CustomReport::title() must be public (as in class BaseReport) |
| demo_polymorphism.php | php demo_polymorphism.php | `M01 - Alya \| Rp5000000`, `M02 - Bima [Beasiswa] \| Rp3000000` |
| demo_presenter.php | php demo_presenter.php | `Name: Alya`, `ID: M01, Name: Alya`, `5000000` |
| tugas1_error_overload.php | php tugas1_error_overload.php | Fatal error: Cannot redeclare Calculator::add() |
| tugas1_variadic.php | php tugas1_variadic.php | `10` |
| tugas2_showdata.php | php tugas2_showdata.php | `ID: 2530521067, Name: Gnayas, Major: Teknik Informatika`, 2x `InvalidArgumentException: Expected 1, 2, or 3 strings` |
| tugas3_internasional.php | php tugas3_internasional.php | `M01 - Alya \| Reguler \| Rp5000000`, `M02 - Bima [Beasiswa] \| Beasiswa \| Rp3000000`, `M03 - Chen [Internasional] \| Internasional \| Rp6500000` |
| uji_t06_t08.php | php uji_t06_t08.php | `T06: 5000000`, `T07: 3000000`, 2 baris `T08 (diskon ...): InvalidArgumentException - Potongan harus berada pada rentang 0-100` |

Catatan:
- File `contoh5_error_*.php` dan `tugas1_error_overload.php` memang sengaja error (eksperimen).
- `Mahasiswa.php` (tambah `ringkasan()`) dan `MahasiswaBeasiswa.php` (override `ringkasan()`) adalah hasil refactor dari Praktikum 6.
- `contoh1_Calculator.java/.cpp` hanya untuk dibaca, tidak perlu dijalankan.
