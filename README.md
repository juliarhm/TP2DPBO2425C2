Saya Julia Rahmawati dengan NIM 2400742 mengerjakan TP 1 dalam mata kuliah Desain Pemrograman Berorientasi Berorientasi Objek untuk keberkahan-Nya, maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan Aamiin.

Saya akan menjelaskan atribut, methods, diagram, penjelasan alur program, dan dokumentasi.

1. Class
a. Class Manusia ( di class Manusia, terdapat 3 atribut, yaitu NoKTP, Nama, Alamat. Ketiga atribut tersebut menyimpan informasi penting manusia dan ketiga atribut tersebut adalah private, jadi saya harus menggunkan getter dan setter untuk membaca atau mengubahnya. Di dlaam class ini ada method tampil_data__manusia yang berfungsi untuk menampilkan semua atributnya).
b. Class Pelanggan ( Atribut pelanggan adlah subclass atau child dari Manusia. Jadi, Pelanggan mewarisi semua atribut dan method dari Manusia. Di class Pelanggan juga ada atribut tambahan yaitu IdPelanggan, NoTelephone, dan Riwayat. Ketiga atribut ini private, jadi pakai getter dan setter untuk akses. Dan di dalam class ini juga ada method, yaitu tampil_data_pelanggan yang berfungsi menampilkan data pelanggan, termasuk daya manusia juga yang di warisinya. Pengecualian untuk bahasa PHP, dimana di PHP ada atribut tambahan yaitu fotoproduk). 
c. Class PelangganPremium (class PelangganPremium adlah subclass dari Pelanggan atau grandchild dari Manusia, Sehingga dapat mewarisi semua atribut dan method dari Pelanggan dan Manusia. Didalam Class ini terdapat 3 atribut yaitu, level untuk menyimpan tingkatannya (misal Gold, Silver, dan Platinum), diskon untuk menyimpan persentasi diskon khusus pelanggan premium, dan point untuk menyimpan point reward pelanggan premium. Ketiga atribut ini private, sehingga pakai getter dan setter untuk akses. Di dalam class ini juga ada method tampil_data_premium, yang menampilkan semua data pelanggan premium, termasuk data manusia dan pelanggan).

2. Main
Di dalam program Main ada 2 method yaitu, tambah_pelanggan dimana berfungsi untuk menambahkan pelanggan baru melalui input user. Di sini bisa pilih biasa (untuk pelanggan biasa) atau premium(untuk pelanggan premium/berlangganan lama), lalu menambahkan ke daftar_pelanggan. selanjutnya ada print_separator dimana berfungsi untuk mencetak garis horizontal tabel berdasarkan lebar kolom.

3. Penjelasan Alur Program
1/. Import class (program ini menggunakan class prlanggan dan pelangganpremium. Pelangganpremium mewarisi semua atribut dan method pelanggan dan pelanggan juga sudah mewari Manusia.
2/. Membuat Daftar Pelanggan Awal (Membuat hardcode daftar_pelanggan yang berisi objek pelanggan bisa dan premium. 
3/. Fungsi tambah_pelanggan (Fungsi ini mengambil input user untuk menambahkan pelanggan baru. Disini user bisa milih sebagai pelanggan biasa atau premium ( di premium ada tambahan input yaitu, level, diskon, dan point). Lalu objek barunya akan langsung ditambahkan ke list daftar_pelanggan.
4/. Membuat Tabel 
5/. Menambahkan Data Pelanggan Ke Tabel
Looping setiap pelanggan dalam daftar_pelanggan, isintance() disini digunakan untuk membedakan pelanggan premium dan biasa. untuk pelanggan biasa atribut level, diskon dan point disini "-". 
6/. Mencetak Tabel
