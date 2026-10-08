# Tugas 1 PBO

- Nama: Karel Abimanyu Ahpandi
- NIM: 4525210031
- Kelas: A

Kumpulan program PHP untuk Tugas 1 PBO. Tiap folder isinya satu materi, dijalankan lewat terminal dengan `php main.php`. Folder ini berisi implementasi PHP dari folder program versi Java. Setiap folder php membahas materi yang sama dengan folder java.

## Daftar Folder

| No | Folder | Materi |
|----|--------|--------|
| 01 | `php/01 Class` | Class dan object |
| 02 | `php/02 Constructor` | Constructor |
| 03 | `php/03 inheritance` | Inheritance |
| 04 | `php/04 polymorphism` | Polymorphism |
| 05 | `php/05 asosiasikomposisi` | Asosiasi, agregasi, komposisi |
| 06 | `php/06 abstractinterface` | Abstract class dan interface |

---

## 01 - Class

Membuat class `iPhone` dengan atribut warna dan storage, lalu dibuat dua object (iPhone 13 dan iPhone 14) yang masing-masing menampilkan spesifikasinya.

![Output 01](screenshots/pbo01.png)

## 02 - Constructor

Class mahasiswa dengan constructor. Object pertama dibuat tanpa data sehingga memakai nilai default ("Belum Diisi" dan umur 0), object lainnya diisi lewat constructor dengan nama, NIM, dan umur.

![Output 02](screenshots/pbo02.png)

## 03 - Inheritance

Class `MahasiswaInternational` mewarisi class mahasiswa dan menambah atribut negara asal. Output menampilkan nama, NIM, umur, dan negara asal dari tiga mahasiswa.

![Output 03](screenshots/pbo03.png)

## 04 - Polymorphism

Class `Handphone` punya turunan Smartphone dan Feature Phone. Method yang sama (menyalakan, panggilan, mematikan) menghasilkan output yang berbeda tergantung object-nya, misalnya Smartphone melakukan panggilan video sedangkan Feature Phone panggilan suara.

![Output 04](screenshots/pbo04.png)

## 05 - Asosiasi, Agregasi, Komposisi

- Asosiasi: `Dokter` merawat `Pasien`. 
- Agregasi: `Tim` punya daftar `Pemain`. 
- Komposisi: `Buku` membuat sendiri `Bab` 

![Output 05](screenshots/pbo05.png)

## 06 - Abstract Class dan Interface

Kendaraan dibuat dari abstract class dan interface. Tiap kendaraan bergerak dan mengisi bahan bakar dengan caranya masing-masing.

![Output 06](screenshots/pbo06.png)
