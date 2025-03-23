# smartcontract-disertasi
Modul smart contract di blockchain Node

 
Referensi (Li Luo; J Zhou, 2021 – Computer Communication)
 
Gambar BlockFertilizer System Architecture

1.	Blockchain Node
Bagian inti dari sistem yang menangani eksekusi dan penyimpanan transaksi dalam blockchain. Terdiri dari beberapa modul utama:
a.	Smart Fertilizer Interfaces
Berfungsi sebagai antarmuka yang menghubungkan pengguna dengan sistem. Fitur yang tersedia meliputi:
•	Adding a New Invoice → Menambahkan faktur baru ke dalam sistem.
•	Show Quota → Menampilkan sisa kuota pupuk bersubsidi.
•	User Management → Mengelola pengguna dalam sistem.
•	Purchasing Fertilizer → Fitur pembelian pupuk.
b.	Smart Contract Module
Menangani eksekusi transaksi berbasis smart contract, terdiri dari dua bagian:
•	Smart Contract Module (Transaction) → Bertanggung jawab atas transaksi berbasis smart contract.
•	Smart Contract Module (SPJB) → Mungkin terkait dengan pengelolaan Surat Perjanjian Jual Beli (SPJB) dalam distribusi pupuk.
c.	Consensus Module – PoS (Proof of Stake)
Pada sistem BlockFertilizer, Consensus Module - Proof of Stake (PoS) digunakan untuk mencapai kesepakatan dalam jaringan blockchain, yang berarti bahwa setiap transaksi yang masuk tidak langsung dianggap valid, tetapi harus diverifikasi oleh node dalam jaringan melalui mekanisme PoS.
d.	Data Management Module
Bertanggung jawab atas pengelolaan data yang tersimpan dalam blockchain, memastikan data transaksi aman dan dapat diakses oleh pengguna yang berwenang.
e.	Data Comunnication Module
Mengatur komunikasi antar node dalam jaringan blockchain, memungkinkan pertukaran informasi yang aman dan cepat.

2.	Fitur Pendukung Blockchain
Komponen tambahan yang mendukung operasi blockchain, termasuk:
•	Blockchain Status Management → Mengawasi status blockchain.
•	Transaction Pool Management → Mengelola antrean transaksi yang menunggu validasi.
•	Account Status Management → Memantau status akun dalam sistem.
3.	End-User Nodes
Merupakan node pengguna akhir yang berinteraksi dengan sistem, termasuk:
•	Subsidi Fertilizer Redemption → Proses penebusan pupuk bersubsidi.
•	Remaining Fertilizer Quota → Mengecek sisa kuota pupuk bersubsidi.
•	Invoicing → Pengelolaan faktur transaksi.
•	Region → Pengaturan berdasarkan wilayah distribusi.
•	Sales Realization → Memonitor realisasi penjualan pupuk.
•	Approval → Proses persetujuan dalam sistem.
4.	Interaksi Antar Komponen
•	End-user nodes (produsen, distributor, pengecer dan  petani) mengakses sistem melalui Smart Fertilizer Interfaces.
•	Smart contracts mengelola transaksi berdasarkan aturan yang telah ditetapkan.
•	Blockchain node berfungsi sebagai pusat validasi dan penyimpanan data.
•	Consensus module (PoS) memastikan bahwa hanya transaksi yang valid yang ditambahkan ke blockchain.
![image](https://github.com/user-attachments/assets/7baf7be9-abed-42c6-9050-5fb303b6e6cb)
