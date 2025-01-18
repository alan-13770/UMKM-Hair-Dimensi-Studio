![alt text](Foto_Dokumentasi/cover.png?raw=true)
![alt text](Foto_Dokumentasi/kataPengantar.png?raw=true)

## BAB I Pendahuluan


## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website Profile Company UMKM Hair Dimensi Studio”. Dokumen ini dibangun untuk memudahkan public untuk mengenal UMKM dan memudahkan pemilik barbershop mempromosikan usahanya ke public. Sehingga dokumen ini dapat dijadikan acuan teknis untuk membangun perangkat lunak “Website Profile Company UMKM Hair Dimensi Studio”.

## 1.2 Lingkup
Website Profile Company UMKM Dimensi Hair Studio Merupakan website Untuk mempermudah pemilik usaha barbershop untuk mempromosikan usahanya serta memberi informasi ke public tentang usahanya melalui Website Profile Company UMKM Hair Dimensi Studio.

## 1.3 Akronim, singkatan, definisi
| Istilah | Definisi |
| ------ | ------ |
|   SRS     |    Software Requirement Specification    |
|    Login    | Digunakan untuk mengakses aplikasi       |
|   Software Requirement Specification     | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna       |
|    Use Case    | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda       |

## 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah:
https://www.free-css.com/free-css-templates/page290/restoran




## 1.5 Overview
Bab selanjutnya yaitu menjelaskan sistem yang diterapkan pada website. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada website yang dibuat.



## BAB II GAMBARAN UMUM
Dimensi Hair Studio adalah UMKM yang bergerak di bidang jasa pangkas rambut. Kami merancang website company profile untuk menampilkan informasi layanan, seperti jenis pemangkasan dan perawatan rambut. Website ini juga menyediakan fitur Kontak untuk mempermudah pelanggan menghubungi kami dan fitur Testimoni Pelanggan untuk berbagi pengalaman pelanggan. Website ini bertujuan untuk meningkatkan kemudahan akses dan kenyamanan bagi pelanggan Dimensi Hair Studio. Berikut adalah penjelasan dari fitur - fitur yang kami sediakan,

**Fitur Halaman Utama:**
- Input Pesan Saran
- View Gallery
- View About Us
- View Testimoni
- View Contact
- View Service
- View Home



**Fitur Dashboard:**
- Login
- View Dashboard
- herosection(Input, Edit, Delete)
- service (Input, Edit, Delete)
- testimoni (Input(customer))
- reservasi(Input, Edit, Delete)
- galeri pangkas(Input, Edit, Delete)
- Informasi (Input, Edit, Delete)
- Edit About Us



## 2.1 Perspektif produk
Sistem Dimensi Hair Studio adalah sebuah sistem yang menyediakan informasi dan layanan pemangkasan rambut yang diaplikasikan pada website. Terdapat 2 user, yaitu admin dan pelanggan. Data pada website dikelola oleh admin, sementara pelanggan hanya dapat melihat informasi layanan yang tersedia dan memberikan testimoni mengenai pengalaman mereka di Dimensi Hair Studio. Sistem ini bertujuan untuk memudahkan pelanggan dalam mengakses informasi dan memberikan umpan balik tentang layanan yang telah mereka terima.

**2.1.1 Antarmuka Sistem**

![alt text](Foto_Dokumentasi//antarmuka.jpg?raw=true)

Sistem UMKM Dimensi Hair Studio memiliki 2 pengguna yaitu admin dan Customer. Admin bisa
mengelola data Website dan Customer bisa melihat dan mengunjungi website serta memberi pesan saran dan testimoni.

**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
| Gambar | Penjelasan |
| ------ | ------ |
| ![alt text](Foto_Laporan/login.jpeg?raw=true) | Pada bagian ini, admin dapat melakukan login dengan tujuan untuk mengatur dan mengelola data yang ditampilkan di halaman company profile website.|
| ![alt text](Foto_Laporan/dashboard.jpg?raw=true)   | Ini adalah tampilan halaman utama jika sudah login   |
| ![alt text](Foto_Laporan/crudhero.jpeg?raw=true) | di halaman utama yang menampilkan informasi visual seperti  judul, dan deskripsi yang menarik perhatian pengunjung  |
| ![alt text](Foto_Laporan/crudservice.jpg?raw=true) | Pada halaman ini akan tampil jenis layanan beserta deskripsinya |
| ![alt text](Foto_Laporan/crudtestimoni.jpg.jpeg?raw=true)    | Halaman ini akan menampilkan review dari customer  |
| ![alt text](Foto_Laporan/crudreservasi.jpg?raw=true)  | Pada halaman ini, akan ditampilkan data dari pelanggan yang telah melakukan reservasi.   |
| ![alt text](Foto_Laporan/crudgaleri.jpg?raw=true)  | Ini Halaman ini menampilkan jenis pangkas beserta deskripsinya |
| ![alt text](Foto_Laporan/crudaboutus.jpg?raw=true) | Ini Halaman ini berisi latar belakang dari dimensi hair studio  |
| ![alt text](Foto_Laporan/crudinformasi.jpg?raw=true)    | Ini adalah menu CRUD Informasi, Admin dapat melakukan tambah data, edit data, dan hapus data  |



**Halaman User**
| Gambar | Penjelasan |
| ------ | ------ |
| ![alt text](Foto_Laporan/readaboutus.jpg?raw=true)|  Tampilan About Us menampilkan tentang UMKM ini berjalan
  |
| ![alt text](Foto_Laporan/readgaleri.jpg?raw=true)   | Menampilkan tentang gaya rambut   |
| ![alt text](Foto_Laporan/readservice.jpg?raw=true) |  Menampilkan tentang jenis layanan yang disediakan oleh Dimensi Hair Studio |
| ![alt text](Foto_Laporan/crudtestimoni.jpg?raw=true) | Tampilan testimoni menampilkan customer yang memberikan review
kepada produk UMKM
 |
| ![alt text](Foto_Laporan/crudreservasi.jpg?raw=true)    | Tampilan ini menampilkan data yang harus diisi jika ingin melakukan reservasi |



**2.1.3 Antarmuka perangkat keras**
![alt text](Foto_Laporan/perangkatkeras.png?raw=true)

Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Dimensi Hair Studio yaitu : 
PC / laptop Untuk Menjalankan Aplikasi


**2.1.4 Antarmuka perangkat lunak**

tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Informasi Parenting antara lain :

- PC
- wifi/Jaringan

**2.1.6 Batasan Memori**

tidak ada

**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
| Login | Digunakan untuk mengakses aplikasi    |
| Input Data    |    Digunakan untuk memasukkan data-data    |
| Hapus | Digunakan untuk menghapus data |
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Submit      |     Digunakan untuk menyimpan data   |

**2.1.1 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
![alt text](Foto_Laporan/kebutuhanfungsional.jpg?raw=true)
**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Foto_Laporan/diagramlogin.jpg?raw=true)

Deskripsi Singkat
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin.
Deskripsi Langkah-Langkah

Admin melakukan login dengan username dan password.
Sistem melakukan validasi login.
Bila sukses sistem akan mengarahkan ke home admin.

Xref: Bagian 3.2.1, Login Admin


**2.2.2 Admin Input Herosection**

Use Case: Input Data Menu

Diagram:

![alt text](Foto_Laporan/diagramherosection.jpg?raw=true)

Deskripsi Langkah- langkah:
Sistem akan menampilkan tampilan herosection
Admin dapat melihat,menambahkan, dan mengupload dari judul,penjelasan dan gambar.
Sistem akan menyimpan ke database.
sudah disimpan sistem akan menampilkan peringatan
Xref: Bagian 3.2.3, Input HeroSection


**2.2.3 Admin Input Service**

Use Case: Input Service

Diagram:
![alt text](Foto_Laporan/diagramservice.jpg?raw=true)

Deskripsi Singkat Sistem dapat menampilkan halaman input slide dan Admin menginputkan slide.


Deskripsi Langkah- langkah:
Sistem akan menampilkan tampilan service
Admin dapat melihat,menambahkan, dan mengupload
Sistem akan menyimpan ke database
sudah disimpan sistem akan menampilkan peringatan
Xref: Bagian 3.2.3, Input Service


**2.2.4 Admin Mengelola Testimoni**

Use Case: Meninput Testiomoni

Diagram:![alt text](Foto_Laporan/diagramtestimoni.jpg?raw=true)


Deskripsi Singkat Sistem dapat menampilkan halaman input about dan Admin menginputkan about.

Deskripsi Langkah- langkah:
Sistem akan menampilkan tampilan data testimoni
Admin dapat melihat,menambahkan, dan mengupload nama, pesansaran 
Sistem akan menyimpan ke database.
sudah disimpan sistem akan menampilkan peringatan.
Xref: Bagian 3.2.3, Input Testimoni

**2.2.5 Admin Mengelola Service**

Use Case: Mengelola Service

Diagram:![alt text](Foto_Laporan/diagramservice.jpg?raw=true)


Deskripsi Singkat Sistem dapat menampilkan halaman input reservasi dan Admin mengelola halaman reservasi

Deskripsi Langkah- langkah:
.Sistem akan menampilkan tampilan data reservasi
Admin dapat melihat data reservasi
Sistem akan menyimpan ke database.
sudah disimpan sistem akan menampilkan peringatan.
Xref: Bagian 3.2.3, Mengelola Data Reservasi


**2.2.6 Admin Input Testimini**

Use Case: Input Data Testimoni

Diagram:![alt text](Foto_Laporan/diagramgaleri.jpg?raw=true)


Deskripsi Singkat Sistem dapat menampilkan halaman input promo dan Admin menginputkan promo.

Deskripsi Langkah- langkah:
Sistem akan menampilkan tampilan galeri seperti dokumentasi
Admin dapat melihat,menambahkan, dan mengupload jenis pangkas,dan penjelasan
Sistem akan menyimpan ke database.
sudah disimpan sistem akan menampilkan peringatan.
Xref: Bagian 3.2.3, Input data Galeri pangkas rambut



**2.2.7 Mengelola Informasi**

Use Case: Mengelola Informasi

Diagram:
![alt text](Foto_Laporan/mengunjungiwebsite.jpg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman company profile yaitu (Home, About Us, Galeri,Service, Testimoni, Informasi) dan Customer dapat melihat semua informasi yang tersedia di website..

Deskripsi Langkah-Langkah
Sistem akan menampilkan halaman-halaman konten.
pengunjung melihat melihat informasi yang ada pada website seperti  (Home, About Us,Galeri,Service, Testimoni, Informasi)


## 2.3 Spesifikasi kebutuhan non-fungsional
- tabel kebutuhan non-fungsional

| no | deskripsi |
| ------ | ------ |
|     1   |   Semua interface dan fungsi menggunakan Bahasa Indonesia     |
|     2   |   Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, pengunjung )     |

## 2.4 Karakteristik Pengguna
Pengguna berinteraksi langsung dengan website, mulai dari melihat tampilan company profile, dan kemudian untuk admin bisa melakukan login untuk mensetting semua data-data UMKM nya (CRUD) 

## 2.5 Batasan-batasan
tidak ada

## 2.6 Asumsi-asumsi
tidak ada

## 2.7 Kebutuhan Penyeimbang
tidak ada

## BAB III Requirement Specification


## 3.1 Persyaratan Antarmuka Eksternal
Untuk admin yang akan mengakses website ini diperlukan registrasi terlebih dahulu, kemudian akan login dengan memasukkan username dan password, lalu sistem akan validasi login. Setelah login berhasil Admin dapat melihat tampilan admin yang ada di website tersebut. Untuk pengunjung hanya perlu membuka halaman website, kemudian pengunjung dapat melihat konten yang ada di website tersebut.


## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi      | Login   |
| -----------------| ------- |
| Xref                | Bagian 2.2.1 Admin Login             |
| Trigger             | Admin Membuka Website Dimensi Hair Studio|
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|                     | 2. Sistem melakukan validasi login. |
|                     | 3. Bila sukses, sistem akan mengarahkan ke home admin.  |
|                     | 4. Bila gagal, sistem akan menampilkan notifikasi. |
| Alternative         |  Tidak Ada       |
| Post Condition      | Admin dapat login dan mengakses website Dimensi Hair Studio               |
| Exception Push      | Username dan password salah                   |

**3.2.2 Admin Input Hero Section**
| Nama Fungsi | Input Menu|
| ----------- | ------ |
| Xref            | Bagian 2.2.2 Admin Input  HeroSection  |
| Triger          | Admin dapat menginputkan  HeroSection      |
| Precondition    | Admin menginput data HeroSection berupa judul, penjelasan, dan gambar ke website Dimensi Hair Studio |
| Basic Path      | 1. Sistem menampilkan form untuk menginput data HeroSection |
|                 | 2. Admin dapat mengisi data judul, deskripsi, dan mengunggah gambar |
|                 | 3. Sistem akan menyimpan ke database |
               
| Alternative     | Tidak ada |     
| Post Condition  | HeroSection berhasil ditambahkan dan ditampilkan di halaman utama website. |
| Exception Push  | Tidak ada  |


**3.2.3 Admin Input Slider**

| Nama Fungsi        | Input Slider     |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.3 Admin Input Slider                   |
| Trigger            | Admin dapat menginputkan slider |
| Precondition       | Admin menginputkan slider ke website|
| Basic Path         | 1. Sistem akan menampilkan tampilan slider |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus slider   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan notifikasi.   |
| Alternative        | Tidak Ada                                 |
| Post Condition     | Admin dapat menginputkan slider berupa foto        |
| Exception Push     | Tidak Ada        |

**3.2.4 Admin Input Service**

| Nama Fungsi        | Input Promo  |
| ------------------ | ------------ |
| Xref               | Bagian2.2.3 Admin Input Service   |
| Trigger            | Admin dapat mengelola galeri pangkas rambut |
| Precondition       | Halaman manajemen layanan (service)|
| Basic Path         | 1. Admin mengisi nama layanan, deskripsi layanan, harga.|
|                    | 2. Sistem menampilkan form untuk input layanan  |

| Alternative        | Tidak Ada                                 |
| Post Condition     | Data layanan (service) berhasil ditambahkan ke website dan ditampilkan pada halaman layanan       |
| Exception Push     | Tidak Ada        |

**3.2.5 Admin Mengelola testimoni**

| Nama Fungsi        | Input Informasi     |
| ------------------ | --------------- |
| Xref               | Bagian 2.2.4 Admin Mengelola Testimoni             |
| Trigger            | Admin dapat mengelola testimoni pada website |
| Precondition       | Admin Melihat testimoni |
| Basic Path         | 1. Sistem akan menampilkan tampilan testimoni |
|                    | 2. Sistem akan menyimpan ke database   |
               
| Alternative        | Tidak Ada                                 |
| Post Condition     | Admin dapat membalas pesan saran dari pengunjung

      |
| Exception Push     | Tidak Ada        |

**3.2.6 Admin Mengelola Reservasi**

| Nama Fungsi        | Admin Mengelola testimoni     |
| ------------------- | ----------------------|
| Xref               | Bagian 2.2.5 Admin Mengelola Reservasi
                    |
| Trigger            | Admin dapat Admin dapat mengelola data reservasi pelanggan |
| Precondition       | Admin mengakses manajemen reservasi |
| Basic Path         | 1. Sistem menampilkan daftar reservasi yang ada  |
|                    | 2. Admin dapat Melihat detail reservasi, termasuk nama pelanggan, tanggal, waktu, dan layanan yang dipilih.  |
|                    | 3. Sistem akan menyimpan ke database   |

| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Admin Input Galeri**

| Nama Fungsi        |    pengunjung  Mengunjungi website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Admin Input Galeri
         |
| Trigger            |Admin dapat input galeri|
| Precondition       | Admin dapat mengelola (melihat, menambahkan, mengedit, dan menghapus) galeri pangkas di sistem|
| Basic Path         | 1. Admin mengelola jenis pangkas atau deskripsi yang tersedia |
|                    | 2. Sistem akan menyimpan ke database   |
| Alternative        |  Tidak ada  |
| Post Condition     |  Admin dapat mengelola galeri pangkas, termasuk menambahkan, mengedit, atau menghapus jenis pangkas dan deskripsinya   |
| Exception Push     |  Tidak ada   |

**3.2.7  Admin Input Informasi**
 Nama Fungsi        | Admin Mengelola testimoni     |
| ------------------- | ----------------------|
| Xref               | Bagian 2.2.7 Admin Input Informasi
                    |
| Trigger            | Admin menginputkan informasi ke website |
| Precondition       | Admin dapat mengelola (melihat, menambahkan, mengedit, dan menghapus) galeri pangkas di sistem|
| Basic Path         | 1. Sistem akan menampilkan tampilan informasi  |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan
           menghapus informasi
 |
|                    | 3. Sistem akan menyimpan ke database   |

| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin dapat menginputkan, dan mengupload email, nomor, alamat, hari, jam        |
| Exception Push     | Tidak Ada        |

**3.2.8  Admin Input Informasi**
 Nama Fungsi        | Pengunjung Mengunjungi Website

    |
| ------------------- | ----------------------|
| Xref               | Bagian 2.2.9 Pengunjung Mengunjungi Website
                    |
| Trigger            | Pengunjung dapat mengunjungi website dan melihat informasi yang ada pada website Dimensi Hair Studio yang telah disediakan

|
| Precondition       | Pengunjung Mengunjungi Website|
| Basic Path         | 1. Sistem akan menampilkan halaman halaman konten

  |
|                    | 2. Pengunjung melihat informasi yang ada pada website dan juga dapat memberikan pesan saran dan testimoni pada website yang tersedia
 |             

| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Pengunjung mengunjungi website dan melihat informasi yang tersedia pada website
        |
| Exception Push     | Tidak Ada        |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Foto_Laporan/erd.png?raw=true)
**3.3.1 Logika Struktur Data**

Struktur data logika pada sistem Company Profile Dimensi Hair Studio terdapat struktur Database yang dijelaskan menggunakan ERD.

**Tabel Admin**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id_Admin|int|Auto-increment dari Id_Admin|
|email|varchar|Berisi username admin untuk mengakses sistem|
|Password|varchar|Berisi password admin untuk mengakses sistem|


**Tabel Service**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id|int|Auto-increment dari Id|
|nama|varchar|Berisi string nama|
|nomor_wa|varchar|Berisi string nomor wa|
|jam|varchar|Berisi string waktu|


**Tabel Testimoni**
| Data Item     | Tipe Data   | Deskripsi                                                                                     |
|---------------|-------------|-----------------------------------------------------------------------------------------------|
| id            | int         | Auto-increment ID, digunakan sebagai pengidentifikasi unik untuk setiap testimoni.           |
| nama          | varchar     | Berisi nama pelanggan yang memberikan ulasan atau feedback tentang layanan yang diterima.    |
| pesan_saran   | varchar     | Menampung masukan atau saran dari pelanggan mengenai layanan yang mereka terima.             |
| gambar        | varchar     | Berisi jalur atau nama file gambar yang diunggah oleh pelanggan sebagai bagian dari testimoni.|

**Tabel Reservasi**
| Data Item  | Tipe Data | Deskripsi                                                                                  |
|------------|-----------|--------------------------------------------------------------------------------------------|
| id         | int       | Auto-increment dari ID.                                                                   |
| nama       | varchar   | Berisi tentang catatan nama pelanggan yang melakukan reservasi di Dimensi Hair Studio.     |
| nomor_wa   | varchar   | Berisi tentang catatan nomor HP customer yang melakukan reservasi.                         |
| jam        | varchar   | Berisi tentang catatan waktu yang dipilih pelanggan untuk reservasi.                       |
| tanggal    | date      | Berisi catatan tanggal pelanggan yang melakukan reservasi.                                 |



**Tabel Galeri Pangkas**
| Data Item      | Tipe Data | Deskripsi                                 |
| id             | int       | Auto-increment dari ID.                                                                     |
| jenis_pangkas  | varchar   | Berisi informasi mengenai berbagai jenis layanan pemangkasan rambut yang ditawarkan di Dimensi Hair Studio. |
| penjelasan     | varchar   | Berisi keterangan atau deskripsi lebih rinci mengenai setiap jenis layanan pemangkasan rambut yang ditawarkan. |


**Tabel Informasi**
| Data Item | Tipe Data | Deskripsi                                                                                   |
|
| id        | int       | Auto-increment dari ID.                                                                     |
| email     | varchar   | Berisi alamat email yang digunakan untuk kontak atau komunikasi.                            |
| nomor     | varchar   | Berisi nomor telepon yang dapat digunakan untuk menghubungi.                                |
| alamat    | varchar   | Berisi alamat fisik yang relevan dengan informasi yang disediakan.                          |
| hari      | varchar   | Berisi informasi mengenai hari yang tersedia atau relevan dengan aktivitas tertentu.         |
| jam       | varchar   | Berisi informasi mengenai jam operasional atau waktu yang relevan.                          |


**Tabel Herosection**
| Data Item  | Tipe Data | Deskripsi                                                                                      |

| id         | int       | Auto-increment dari ID.                                                                        |
| judul      | varchar   | Berisi informasi utama yang ditujukan untuk menarik perhatian pengunjung saat pertama kali membuka website. |
| penjelasan | varchar   | Berisi informasi tambahan yang memperjelas atau memberikan detail lebih lanjut.                |
| gambar     | varchar   | Berisi gambar atau visual yang mewakili judul dan penjelasan yang ditampilkan.                 |

## Pembagian Tugas Laporan
BAB 1

     Muhammad Sabil Ramadhan

BAB 2

      2.1 Tengku Muhammad Hadin Nazmi

      2.2 Muhammad Yahya

      2.3 Muhammad Sabil Ramadhan

      2.4 Muhammad Sabil Ramadhan

      2.5 Muhammad Sabil Ramadhan


      2.6 Muhammad Sabil Ramadhan


      2.7 Muhammad Sabil Ramadhan


BAB 3

      3.1 Tengku Muhammad Hadin Nazmi

      3.2 Muhammad Sabil Ramadhan


      3.3 Muhammad Sabil Ramadhan, Tengku Muhammad Hadin Nazmi


## PEMBAGIAN TUGAS PROJECT
1.	Tengku Muhammad Hadin Nazmi
      -	CRUD herosection
      -	CRUD Reservasi
      -     About us 
2.	Muhammad Sabil Ramadhan
      -	CRUD service
      -	CRUD Testimoni 
3.	Muhammad Yahya
      -	CRUD Galeri
      -	CRUD Informasi



