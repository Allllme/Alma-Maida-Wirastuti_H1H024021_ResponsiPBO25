# Responsi Praktikum PBO - PokéCare

## Data Diri
Nama Lengkap : Alma Maida Wirastuti  
NIM          : H1H024021  
Shift Awal   : B  
Shift Akhir  : A

---

## Deskripsi Aplikasi
Aplikasi PokéCare ini merupakan simulasi latihan Pokémon berbasis web menggunakan PHP Native. Pokémon yang digunakan adalah **Dugtrio** dengan tipe Ground.

Aplikasi memiliki 3 halaman:
1. Beranda → Menampilkan informasi dasar Dugtrio  
2. Latihan → Trainer dapat melakukan latihan berdasarkan jenis & intensitas  
3. Riwayat → Mencatat semua sesi latihan  

## Konsep OOP yang Dipakai
Aplikasi ini menggunakan 4 Pilar OOP:

1. **Encapsulation** → Atribut Pokémon (name, type, level, hp) disembunyikan dengan `protected`.  
2. **Inheritance** → `Dugtrio.php` mewarisi class `Pokemon.php`.  
3. **Polymorphism** → Method `train()` dioverride di Dugtrio agar efek latihan berbeda.  
4. **Abstraction** → Class Pokémon menyediakan struktur dasar, detailnya dikembangkan pada Dugtrio.

---

## Cara Menjalankan Aplikasi
1. Buka folder project di VSCode  
2. Jalankan server PHP:

## Gif
![Demo](https://raw.githubusercontent.com/Allllme/Alma-Maida-Wirastuti_H1H024021_ResponsiPBO25/main/Animation.gif)
