###################
APA ITU REST API
###################

"Sebuah Sistem Perangkat Lunak yang dibuat untuk mendukung interapobilitas/interaksi antar 2 aplikasi yang berbeda melalui jaringan."

*******************
Ilustrasi
*******************
* API adalah Penghubung
* REST API adalah aturannya
* ada Request & Response
* data yang dikirim/diterima berupa JSON

**************************
REST API
**************************
* singkatan REST => Representasional State Transfer
* Gaya Perancangan / Arshitectural Style
* arsitekur Stateless
		* Setiap Request HTTP dilakukan secara terisolasi
		* Server Tidak menyimpan state apapun mengenai sesi dari client
		* setiap request dari client harus berisi semua informasi yang dibutuhkan server termasuk informasi otentikasi
* diciptakan oleh By.Roy Fielding.,Phd
* Protokol Hampir selalu menggunakan HTTP
* Memungkinkan Interaksi antar mesin

**************************
HTTP
**************************
* HTTP => Hyepertext Transfer Protocol
* URL => Uniform Resource Locator
  * Alamat dari sebuah resource yang dapat diakses di internet
**************************
Kode Status
**************************
* 200 - success
* 404 - Not Found
* 500 - Server Error
**************************
HTTP Method/Verb
**************************
* GET Meminta sesuatu
* POST Menambah Data
+ PUT Mengubah Data
* DELETE Menghapus Data
**************************
Syarat RESTFul API 
**************************
* Menggunakan HTTP method yang benar
* URI/endpoints-nya menggunakan kata benda, bukan kata kerja
* stateless
**************************
JSON
**************************
* JSON => Javascript Object Notation
* Berisi Key selalu dibungkus menggunakan " "  dan Value {"key" = "value"}
* Tipe data dari value yang boleh disimpan pada json
  * BOOLEAN  - true/false
  * ARRAY - ["value1", "value2",...]
  * STRING - teks/unicode, dibungkus menggunakan " "
  * object - var mahasiswa {"key" = "value"}
  * number - integer / float
  * null- null
* dibuat bersarkan object pada javascript
* digunakan juga untuk file konfigurasi(tidak disarankan)
* ekstensi file json .json
* JSON tidak memilik method

 



