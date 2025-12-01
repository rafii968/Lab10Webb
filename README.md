# Lab10Webb
# MUHAMAD SAEFUL RAFII 312410374
## Langkah–Langkah Praktikum

### 1. Membuat Folder Proyek

Pada direktori XAMPP:

C:\xampp\htdocs\

dibuat folder baru dengan nama:
lab10_php_oop
Seluruh file praktikum diletakkan di dalam folder ini.

## 2. Membuat File Program OOP Pertama (mobil.php)

Pada tahap ini dibuat sebuah class dengan nama Mobil yang memiliki property seperti warna, merk, dan harga.
Kemudian dibuat dua objek mobil dan menampilkan warna awal serta perubahan warnanya.
Hasil akhirnya berupa tampilan informasi dua mobil yang telah diubah warnanya.
<img width="1541" height="954" alt="image" src="https://github.com/user-attachments/assets/4a8cbeb3-99f9-412d-97b0-f3066dcff2c3" />
 <img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/7c41c7ca-edf4-4145-b771-2e2f89f7c6c4" />

## 3. Membuat Class Library Form (form.php)

Class ini berfungsi sebagai pustaka untuk membangun form input secara otomatis.
Class menyimpan:
list field
label
action form
tombol submit
Class ini belum dapat dijalankan langsung sebelum dipanggil oleh file lain.
<img width="1919" height="1007" alt="image" src="https://github.com/user-attachments/assets/35d51f34-f341-4412-9973-0ae303cd1478" />
<img width="1919" height="994" alt="image" src="https://github.com/user-attachments/assets/0d84efcf-55d4-4a52-8d34-b83c930bee80" />

## 4. Menggunakan Class Form dalam file form_input.php

Pada tahap ini file form.php dilakukan include, lalu dibuat objek Form dan ditambahkan beberapa field seperti:
NIM
Nama
Alamat
Kemudian form ditampilkan ke browser.
Hasil halaman berupa form input sederhana yang berasal dari class library.
<img width="1917" height="1009" alt="image" src="https://github.com/user-attachments/assets/6245e37b-8ff4-45c6-a613-7d964ad2a555" />

## 5. Membuat Konfigurasi Database (config.php)

File ini berisi informasi konfigurasi database:
host
username
password
nama database

Konfigurasi ini nantinya digunakan oleh class database untuk melakukan koneksi.

## 6. Membuat Class Library Database (database.php)

Pada tahap ini dibuat sebuah class untuk menangani:
koneksi database
menjalankan query
insert data
mendapatkan data
update data
delete data
Class ini mengambil konfigurasi dari config.php dan digunakan sebagai modularisasi program.

## 7. Implementasi Database dalam demo_database.php

File ini digunakan untuk melakukan percobaan operasi database menggunakan class Database.
Proses yang dilakukan:
membuat objek Database
menarik data dari tabel mahasiswa
menampilkan data di halaman browser
Hasilnya berupa tampilan informasi mahasiswa yang berhasil diambil dari database MySQL.

## 8. Membuat Database dan Tabel dengan phpMyAdmin

Melalui phpMyAdmin dibuat database dengan nama lab10web, kemudian dibuat tabel:
mahasiswa (nim, nama, alamat)
Database ini digunakan dalam pengujian class database yang telah dibuat.
<img width="1919" height="1006" alt="image" src="https://github.com/user-attachments/assets/adbfa631-2d80-42ea-9040-f94416dda794" />

## 9. Dokumentasi dan Screenshot
Screenshot yang dibuat dalam laporan:
Struktur folder lab10_php_oop
Hasil running mobil.php
Tampilan form dari form_input.php
Tampilan phpMyAdmin (database + tabel mahasiswa)
Hasil output demo_database.php

## 10. Commit dan Push ke GitHub

Setelah semua file selesai dibuat, dilakukan:
git init
git add .
git commit -m "Praktikum 10 PHP OOP selesai"
Push ke repository dengan nama:
Lab10Web
Kemudian link repository dikirimkan melalui e-learning.
