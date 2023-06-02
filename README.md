# TP4DPBO2023
Dokumentasi tertera pada readme
## Janji
Dicki Fathurohman_2103842_Ilmu Komputer TP3 DPBO2023

Saya Dicki Fathurohman [2103842] mengerjakan TP3 DPBO2023 dalam mata kuliah DPBO, untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikan. Aamiin.

## Deskripsi Tugas
Download Kode PHP pada link berikut ini TP MVC.
- Buatlah database berdasarkan kode tersebut
- Ubah arsitektur project tersebut menggunakan MVC
- Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya bebas ya)
- Buat CRUD dari tabel  baru tersebut

## Desain Database
![image](https://github.com/dickifathurohman/TP4DPBO2023/assets/100754802/b61f347d-6d3b-49e7-9c00-7c52e476feb0)
Terdapat 2 tabel yaitu :
1. grup : dengan atribut id dan nama
2. member : dengan atribut id, nama, email, phone, join_date, dan grup_id yang foreign key terhadap tabel grup.
Relasi dari grup ke member yaitu one to many. Satu grup bisa berisikan banyak member

## Alur Program
1. User akan diarahkan ke halaman index.php saat pertama kali mengakses website, pada halaman ini user akan ditampilkan list member. User dapat melakukan penambahan member melalui button `add new` yang tersedia. Jika diklik maka web akan menampilkan form inputan. User jga dapat mengedit atau menghapus member yang ada melalui button action `edit` atau `hapus` yang tersedia pada tabel.
2. User dapat melihat daftar grup dengan menekan tulisan `grup` pada navbar. User juga dapat melakukan tambah, edit/update dan hapus grup seperti pada member. Add dapat dilakukan dengan mengisi field inputan yang tersedia diatas tabel grup. Jika grup dihapus, maka member dengan grup tersebut juga akan terhapus.

## Dokumentasi
`home atau index`

![image](https://github.com/dickifathurohman/TP4DPBO2023/assets/100754802/6743ba83-84ea-4ddc-b03c-87f5f4bd4044)

`grup`

![image](https://github.com/dickifathurohman/TP4DPBO2023/assets/100754802/d86eac4d-be35-48af-954b-954faa73247c)

`form`

![image](https://github.com/dickifathurohman/TP4DPBO2023/assets/100754802/7c364ad9-c142-4bd0-9ee8-85288ec0edd0)

![image](https://github.com/dickifathurohman/TP4DPBO2023/assets/100754802/29450ec1-8e4a-43b7-a525-ab088bee6a85)

## Video demo
https://github.com/dickifathurohman/TP4DPBO2023/assets/100754802/4d5aa4a8-3a2a-4c41-b2da-1e9c0eeb05d3


