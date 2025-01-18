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
| ![alt text](Foto_Laporan/dashboard.jpg?raw=true)   | Ini merupakan halaman utama jika user sudah bisa melakukan login.   |
| ![alt text](Foto_Laporan/slider.jpeg?raw=true) | Ini adalah menu CRUD Slider, Admin dapat melakukan tambah data, edit data, dan hapus data.    |
| ![alt text](Foto_Laporan/menu.jpeg?raw=true) | Ini adalah menu CRUD Menu, Admin dapat melakukan tambah data, edit data, dan hapus data.   |
| ![alt text](Foto_Laporan/promo.jpeg?raw=true)    | Ini adalah menu CRUD Promo, Admin dapat melakukan tambah data, edit data, dan hapus data.  |
| ![alt text](Foto_Laporan/informasi.jpeg?raw=true)  | Ini adalah menu CRUD Informasi, Admin dapat melakukan tambah data, edit data, dan hapus data.   |
| ![alt text](Foto_Laporan/testimoni.jpeg?raw=true)  | Ini adalah menu CRUD Testimoni, Admin dapat melakukan tambah data, edit data, dan hapus data.   |
| ![alt text](Foto_Laporan/about.jpeg?raw=true) | Ini adalah menu dari About Us, disini tidak menggunakan CRUD, tetapi hanya menggunakan update atau edit data, sehingga data-data yang sudah diinput sebelumnya diubah menjadi yang baru   |
| ![alt text](Foto_Laporan/contact.jpeg?raw=true)    | Contact juga seperti itu, mengedit atau mengupdate data yang ada.   |
| ![alt text](Foto_Laporan/home.jpeg?raw=true)   | Ini merupakan halaman luaran dari website yang nantinya sebagai tampilan yang bisa dilihat oleh customer. |


**Halaman User**
| Gambar | Penjelasan |
| ------ | ------ |
| ![alt text](Foto_Laporan/home.jpeg?raw=true)|  Ini merupakan tampilan luaran yang ada pada website yang bisa dijelajahi oleh pengunjung.   |
| ![alt text](Foto_Laporan/aboutCust.jpeg?raw=true)   | Tampilan About Us menampilkan tentang UMKM ini berjalan.   |
| ![alt text](Foto_Laporan/informasiCust.jpeg?raw=true) |  Tampilan Informasi menampilkan informasi terbaru dari UMKM |
| ![alt text](Foto_Laporan/testimoniCust.jpeg?raw=true) | Tampilan testimoni menampilkan customer yang memberikan review kepada produk UMKM  |
| ![alt text](Foto_Laporan/menu.jpeg?raw=true)    | Tampilan Menu menampilkan semua menu atau produk dari UMKM nya  |
| ![alt text](Foto_Laporan/promo.jpeg?raw=true)  | Tampilan Promo menampilkan semua promo yang tersedia dari UMKM nya   |
| ![alt text](Foto_Laporan/contactCust.jpeg?raw=true)  |Tampilan Contact untuk menunjukkan lokasi serta informasi media sosial dari UMKM nya.   |


**2.1.3 Antarmuka perangkat keras**
![alt text](Foto_Laporan/PerangkatKeras.png?raw=true)

Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Babe Thai Tea  yaitu : 

- PC / Laptop Untuk menjalankan Aplikasi ini.

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
| Tambah Data    |    Digunakan untuk memasukkan data-data    |
| Kembali |  Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data|
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Submit      |     Digunakan untuk menyimpan data   |

**2.1.1 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Foto_Laporan/diagramAdmin.png?raw=true)

Deskripsi Singkat 
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login. 

Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.

Xref: Bagian 3.2.1, Login Admin

**2.2.2 Admin Input Menu**

Use Case: Input Data Menu

Diagram:

![alt text](Foto_Laporan/diagramMenu.png?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman input menu dan Admin menginputkan menu

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data menu.
2. Admin dapat melihat,menambahkan, dan mengupload nama menu , harga dan foto menu.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.

Xref: Bagian 3.2.2, Input Data Menu

**2.2.3 Admin Input Slider**

Use Case: Input Data Slider

Diagram:
![alt text](Foto_Laporan/diagramSlider.jpeg?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman slider dan Admin menginputkan slider.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data slider.
2. Admin dapat melihat,menambahkan, dan mengupload gambar slider.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.

Xref: Bagian 3.2.3, Input Data Slider

**2.2.4 Admin Input Promo**

Use Case: Input data Promo

Diagram:![alt text](Foto_Laporan/diagramPromo.jpeg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman promo dan Admin menginputkan promo.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data promo.
2. Admin dapat melihat,menambahkan, dan mengupload foto promo dan deskripsi.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.

Xref: Bagian 3.2.3, Input Data Promo

**2.2.5 Admin Input Informasi**

Use Case: Input data Informasi

Diagram:![alt text](Foto_Laporan/diagramInformasi.jpeg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman informasi dan Admin menginputkan informasi.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data informasi.
2. Admin dapat melihat,menambahkan, dan mengupload  judul, deskripsi dan gambar.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.


Xref: Bagian 3.2.3, Input Data Informasi

**2.2.6 Admin Input Testimini**

Use Case: Input Data Testimoni

Diagram:![alt text](Foto_Laporan/diagramTestimoni.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman informasi dan Admin menginputkan testimoni.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data testimoni.
2. Admin dapat melihat,menambahkan, dan mengupload  judul, deskripsi dan gambar.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.


Xref: Bagian 3.2.3, Input data Testimoni


**2.2.7 pengunjung Mengunjungi website**

Use Case: Mengunjungi website

Diagram:
![alt text](Foto_Laporan/diagramPengunjung.png?raw=true)

Deskripsi Singkat 
Sistem dapat menampilkan halaman company profile yaitu (Home, About Us, Informasi, Testimoni, Menu, Promo, Contact) dan pengunjung dapat melihat semua informasi yang tersedia di website.

Deskripsi Langkah-Langkah
1. Sistem akan menampilkan tampilan halaman utama
2. Pengunjung dapat melihat tampilan home, about us, informasi, testimoni, menu, promo, contact dan juga melakukan testimoni


Xref: Bagian 3.2.7, Mengunjugi Website

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
Untuk admin yang akan mengakses website ini diperlukan login terlebih dahulu, kemudian akan memasukkan username dan password, lalu sistem akan validasi login. Setelah login berhasil Admin dapat melihat tampilan admin yang ada di website tersebut. Untuk pengunjung hanya perlu membuka halaman website, kemudian pengunjung dapat melihat informasi dan data product yang ada di website tersebut.

## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi      | Login   |
| -----------------| ------- |
| Xref                | Bagian 2.2.1 Admin Login             |
| Trigger             | Admin Membuka Website Babe Thai Tea|
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|                     | 2. Sistem melakukan validasi login. |
|                     | 3. Bila sukses, sistem akan mengarahkan ke home admin.  |
|                     | 4. Bila gagal, sistem akan menampilkan notifikasi. |
| Alternative         |  Tidak Ada       |
| Post Condition      | Admin dapat login dan mengakses website Babe Thai Tea                |
| Exception Push      | Username dan password salah                   |

**3.2.2 Admin Input Menu**
| Nama Fungsi | Input Menu|
| ----------- | ------ |
| Xref            | Bagian 2.2.2 Admin Input Menu     |
| Triger          | Admin dapat menginputkan menu       |
| Precondition    | Admin menginputkan menu Babe Thai Tea ke website |
| Basic Path      | 1. Sistem akan menampilkan tampilan menu Babe Thai Tea . |
|                 | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus menu |
|                 | 3. Sistem akan menyimpan ke database. |
|                 | 4. Jika sudah disimpan sistem akan menampilkan notifikasi. |
| Alternative     | Tidak ada |     
| Post Condition  | Admin dapat menginputkan menu Minuman Babe Thai Tea seperti nama menu, harga, foto menu |
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

**3.2.4 Admin Input Promo**

| Nama Fungsi        | Input Promo  |
| ------------------ | ------------ |
| Xref               | Bagian 2.2.4 Admin Input promo    |
| Trigger            | Admin dapat menginputkan promo |
| Precondition       | Admin menginputkan promo ke website|
| Basic Path         | 1. Sistem akan menampilkan tampilan promo |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus promo  |
|                    | 3. Sistem akan menyimpan ke database  |
|                    | 4. Jika sudah disimpan sistem akan menampilkan notifikasi.   |
| Alternative        | Tidak Ada                                 |
| Post Condition     | Admin dapat menginputkan promo seperti foto promo dan deskripsi        |
| Exception Push     | Tidak Ada        |

**3.2.5 Admin Input Informasi**

| Nama Fungsi        | Input Informasi     |
| ------------------ | --------------- |
| Xref               | Bagian 2.2.5 Admin Input Informasi                  |
| Trigger            | Admin dapat menginputkan Informasi |
| Precondition       | Admin menginputkan informasi ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan informasi |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus informasi   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan notifikasi.   |
| Alternative        | Tidak Ada                                 |
| Post Condition     | Admin dapat menginputkan kutipan seperti judul, isi kutipan deskripsi dan gambar       |
| Exception Push     | Tidak Ada        |

**3.2.6 Admin Mengelola Testimoni**

| Nama Fungsi        | Admin Mengelola testimoni     |
| ------------------- | ----------------------|
| Xref               | Bagian 2.2.6 Admin Mengelola testimoni                     |
| Trigger            | Admin dapat mengelola testimoni pada website |
| Precondition       | Admin Melihat testimoni  |
| Basic Path         | 1. Sistem akan menampilkan tampilan testimoni  |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus testimoni  |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan notifikasi.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Pengunjung Mengunjungi website**

| Nama Fungsi        |    pengunjung  Mengunjungi website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Pengunjung Mengunjungi Website          |
| Trigger            |Pengunjung dapat mengunjungi website dan melihat informasi  dan data produk yang ada pada website Babe Thai Tea yang telah disediakan|
| Precondition       | Pengunjung Mengunjungi Website |
| Basic Path         | 1. Sistem akan menampilkan halaman-halaman Home. |
|                    | 2. Pengunjung melihat informasi yang ada pada website dan juga dapat memberikan testimoni pada website yang tersedia   |
|                    | 3.pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.    |
| Alternative        |  Tidak ada  |
| Post Condition     |  Pengunjung mengunjungi website dan melihat informasi yang tersedia pada website     |
| Exception Push     |  Tidak ada   |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Foto_Laporan/erd.png?raw=true)
**3.3.1 Logika Struktur Data**

Struktur data logika pada sistem Company Profile Babe Thai Tea terdapat struktur Database yang dijelaskan menggunakan ERD.

**Tabel Admin**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id_Admin|int|Auto-increment dari Id_Admin|
|username|varchar|Berisi username admin untuk mengakses sistem|
|Password|varchar|Berisi password admin untuk mengakses sistem|


**Tabel Slider**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_lider|int|Auto-increment dari Id_slider|
|gambar|varchar|Berisi gambar didalam slider sistem|


**Tabel Promo**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_Promo|int|Auto-increment dari Id_promo|
|gambar|varchar|Berisi gambar didalam promo sistem|
|deskripsi|text|Berisi deskripsi promo sistem|

**Tabel Informasi**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_informasi|int|Auto-increment dari id_informasi|
|judul|varchar|Berisi judul pada informasi sistem|
|deskripsi|text|Berisi deskripsi informasi sistem|
|gambar|varchar|Berisi gambar didalam informasi sistem|


**Tabel Testimoni**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_Testimoni|int|Auto-increment dari id_testimoni|
|judul|varchar|Berisi judul pada testimoni sistem|
|deskripsi|text|Berisi deskripsi testimoni sistem|
|gambar|varchar|Berisi gambar didalam testimoni sistem|

**Tabel Menu**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_menu|int|Auto-increment dari Id_menu|
|nama_menu|varchar|Berisi nama pada menu sistem|
|harga|text|Berisi harga pada menu sistem|
|gambar|varchar|Berisi gambar didalam menu sistem|



## Pembagian Tugas Laporan
BAB 1

      1.1 Tengku Muhamad Raafi

      1.2 Tengku Muhamad Raafi

      1.3 Zikrul Cahyadi

      1.4 Zikrul Cahyadi

      1.5 Zikrul Cahyadi

BAB 2

      2.1 Zikrul Cahyadi, Franky Young, Tengku Muhamad Raafi

      2.2 Zikrul Cahyadi, Tengku Muhamad Raafi

      2.3 Tengku Muhamad Raafi

      2.4 Tengku Muhamad Raafi

      2.5 Tengku Muhamad Raafi

      2.6 Zikrul Cahyadi, Franky Young, Tengku Muhamad Raafi

      2.7 Zikrul Cahyadi, Franky Young, Tengku Muhamad Raafi

BAB 3

      3.1 Zikrul Cahyadi

      3.2 Zikrul Cahyadi

      3.3 Franky Young, Zikrul Cahyadi

## PEMBAGIAN TUGAS PROJECT
1.	Franky Young
      -	Login Untuk Admin
      -	CRUD Testimoni
2.	Tengku Muhamad Raafi
      -	Tampilan Company Profile (Home, About Us, Informasi, Testimoni, Menu, Promo, Contact) 
      -	CRUD Informasi
      -	Menu About Us dan Contact (Tidak CRUD , tapi menggunakan update data)
      -	Tampilan Dashboard Admin (Menu: CRUD Slider, CRUD Menu, CRUD Promo, CRUD Informasi, CRUD Testimoni, About, Contact)
3.	Zikrul Cahyadi
      -	CRUD Slider
      -	CRUD Menu
      -	CRUD Promo


