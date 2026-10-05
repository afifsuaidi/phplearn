KURIKULUM UTAMA
===============

FASE 1 — FUNDAMENTAL PHP
------------------------
BAB 1 — PHP dan Runtime
- Apa itu PHP
- Server-side programming
- PHP runtime
- PHP CLI
- Built-in development server
- File .php
- <?php ?>
- echo
- komentar

Praktik:
- Menjalankan PHP melalui terminal
- Membuat halaman profil sederhana

Mini Project:
- Halaman Profil Dinamis


BAB 2 — Variable, Data Type & Operator
- Variable
- String
- Integer
- Float
- Boolean
- Null
- Operator aritmatika
- Operator perbandingan
- Operator logika

Praktik:
- Perhitungan harga buku
- Total
- Diskon
- Total pembayaran

Mini Project:
- Kalkulator Belanja Buku


BAB 3 — Percabangan
- if
- elseif
- else
- switch
- match

Praktik:
- Sistem penilaian

Mini Project:
- Sistem Penilaian Ujian


BAB 4 — Looping
- for
- foreach
- while

Praktik:
- Menampilkan daftar buku
- Mengolah data berulang

Mini Project:
- Daftar Koleksi Buku


BAB 5 — Array
- Indexed array
- Associative array
- Multidimensional array
- count()
- in_array()
- array_push()
- array_pop()
- array_map()
- array_filter()
- array_find()

Praktik:
- Mengolah data buku

Mini Project:
- Book Catalog


FASE 2 — PHP UNTUK WEB
----------------------
BAB 6 — Function
- Function declaration
- Parameter
- Return
- Type declaration
- Utility functions

Praktik:
- formatRupiah()
- hitungTotal()
- hitungDiskon()
- validasi()

Mini Project:
- Library Utility Functions


BAB 7 — PHP + HTML
- PHP embedded dalam HTML
- echo
- <?= ?>
- foreach dalam HTML
- pemisahan PHP dan HTML

Mini Project:
- Website Perpustakaan Sederhana


BAB 8 — Form & HTTP
- HTTP request
- GET
- POST
- $_GET
- $_POST
- isset()

Praktik:
- Form tambah buku

Mini Project:
- Form Tambah Buku


BAB 9 — Validation & Sanitization
- trim()
- empty()
- isset()
- filter_var()
- validasi required
- validasi email
- validasi angka
- validasi panjang
- escaping
- htmlspecialchars()

Mini Project:
- Form Registrasi


BAB 10 — Include & Require
- include
- require
- include_once
- require_once

Praktik:
- header
- navbar
- footer
- reusable layout

Mini Project:
- Website Buku dengan Layout Reusable


FASE 3 — PHP APPLICATION
------------------------
BAB 11 — Session & Cookie
- session_start()
- $_SESSION
- Cookie
- perbedaan session dan cookie

Praktik:
- Login
- Session
- Logout

Mini Project:
- Login Sederhana


BAB 12 — File Handling
- fopen()
- fread()
- fwrite()
- file_get_contents()
- file_put_contents()
- $_FILES
- upload file

Praktik:
- Membaca file TXT
- Upload file

Mini Project:
- Import Soal Ujian


BAB 13 — MySQL Fundamental
- Database
- Table
- Row
- Column
- Primary Key
- Foreign Key

SQL utama:
- SELECT
- INSERT
- UPDATE
- DELETE
- WHERE
- ORDER BY
- LIMIT


BAB 14 — PHP + MySQL dengan PDO
- PDO
- koneksi database
- prepare()
- execute()
- fetch()
- fetchAll()
- Prepared Statement

JEMBATAN KE LARAVEL:
- Database abstraction
- Prepared query
- Data access


BAB 15 — CRUD
- Create
- Read
- Update
- Delete
- Search
- Detail

Mini Project BESAR:
- Aplikasi Manajemen Buku

Fitur:
- daftar buku
- tambah buku
- edit buku
- hapus buku
- detail buku
- pencarian
- kategori


FASE 4 — OBJECT ORIENTED PHP
----------------------------
BAB 16 — OOP Fundamental
- Class
- Object
- Property
- Method
- Constructor
- Encapsulation
- Inheritance
- Interface

Praktik:
- Book
- User
- Category


BAB 17 — OOP + Database
- Class untuk akses data
- Repository sederhana
- Pemisahan tanggung jawab

JEMBATAN KE LARAVEL:
- Model
- Repository concept
- Dependency
- Abstraction


FASE 5 — SECURITY
-----------------
BAB 18 — PHP Web Security 20:80

Fokus:
- SQL Injection
- Prepared Statement
- XSS
- htmlspecialchars()
- Password hashing
- password_hash()
- password_verify()
- Session security
- session_regenerate_id()
- CSRF


BAB 19 — Authentication & Authorization
- Register
- Login
- Logout
- Role
- User
- Admin
- Protected page
- Authorization

Mini Project:
- Authentication System


FASE 6 — PHP MODERN
-------------------
BAB 20 — Composer
- Composer
- composer.json
- vendor/
- package
- autoload
- Packagist

JEMBATAN KE LARAVEL:
- Dependency management
- Autoloading


BAB 21 — Namespace & Autoloading
- namespace
- use
- PSR-4
- class autoloading

JEMBATAN KE LARAVEL:
- namespace Laravel
- struktur folder Laravel
- autoload


BAB 22 — MVC
- Model
- View
- Controller

Alur:
Request
→ Controller
→ Model
→ Database
→ Controller
→ View
→ HTML

Mini Project BESAR:
- Toko Online Native PHP

Fitur:
- Produk
- Kategori
- User
- Login
- Keranjang
- Checkout sederhana
- Admin
- CRUD Produk


FASE 7 — PHP ADVANCED TERPILIH
-----------------------------
BAB 23 — Exception & Error Handling
- try
- catch
- finally
- throw


BAB 24 — Modern PHP Type System
- string
- int
- float
- bool
- array
- object
- nullable
- mixed
- void
- strict_types


BAB 25 — Advanced OOP
- Trait
- Abstract Class
- Interface
- Dependency Injection
- Composition
- SOLID

CATATAN:
Materi ini dipelajari setelah mampu membuat aplikasi.
Jangan terlalu lama di teori.


BAB 26 — Debugging
- var_dump()
- print_r()
- error reporting
- error_log
- Xdebug


BAB 27 — Testing
- Unit Test
- Feature Test
- PHPUnit


FASE 8 — CAPSTONE PROJECT
-------------------------
PROJECT:
Aplikasi CAT / Test Online

Tujuan:
Menggabungkan seluruh konsep PHP yang telah dipelajari.

Fitur ADMIN:
- Login
- Upload soal TXT
- Import soal
- Kelola soal
- Kelola ujian
- Kelola peserta
- Lihat hasil

Fitur PESERTA:
- Login
- Pilih ujian
- Timer
- Soal satu per satu
- Navigasi soal
- Submit
- Hasil ujian

Format soal:
[SOAL]
Pertanyaan

[A]
Pilihan A

[B]
Pilihan B

[C]
Pilihan C

[D]
Pilihan D

atau:

[E]
Pilihan E

[JAWABAN]
A
