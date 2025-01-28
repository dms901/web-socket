# DASHBOARD ANDON MQTT BROKER

## Pengenalan Project

Project ini bertujuan untuk mengembangkan sebuah aplikasi andon atau alarm peringatan pada suatu perusahaan yang memuat informasi dengan jelas dan memiliki fleksibilatas yang tinggih sehingga 1 aplikasi dapat digunakan untuk mencakup semua area yang dibutuhkan, selain itu aplikasi ini berbasis web dan mengadaptasi dunia industri 4.0 dengan mengusung sistem IoT yang terintegrasi MQTT Broker yang memungkinkan aplikasi berkomunikasi dengan aplikasi lain atau dengan perangkat mikrokontroler yang mendukung MQTT Broker.

Pada project ini, saya mencoba menggunakan ESP8266 sebagai penerima pesan dari aplikasi tersebut. Pesan yang diterima nantinya akan ditampilkan pada layar monitor berukuran 16x2 menggunakan modul LiquidCrystal_I2C. Selanjutnya, alarm dan lampu peringatan akan menyala sesuai dengan baris yang dipilih pada aplikasi MQTT broker , alarm yang hidup terjadi pada line yang mengalami kondisi abnormal (tidak standar). Namun aplikasi ini cocok untuk departement Quality tapi jika ingin mengembangkan lebih lanjut akan cocok untuk berbagai bidang.

<table>
<ul>
<strong>Fitur-Fitur Utama :</strong>
<li>Input untuk milihan departement : Pengguna dapat memilih departement yang ingin diberikan informasi tentang prodak yang terjadi abnormal.</li>
<li>Input untuk memilih produk: Pengguna dapat memilih produk yang akan diinformasikan yang tersedia di list.</li>
<li>Input untuk memilih jenis abnormal: Pengguna dapat memilih jenis abnormal yang terjadi pada produk</li>
<li>Input Qty dan Satuan Qty: Pengguna dapat memasukan input jumlah dan satuan produk yang terjadi abnormal.</li>
<li>Button ON/OFF Andon: Pengguna dapat mengaktifkan dan dapat mematikan andon</li>
<li>Pesan Status pengiriman informasi: Pengguna dapat melihat status pengiriman informasi di kotak pesan</li>
</ul><br><br>

<ul>
<strong>Teknologi yang Digunakan:</strong>

<li>Frontend: HTML, CSS, JavaScript, dan penggunaan library ajax untuk dapat membuat web lebih responsif seperti penggunaan teknologi ajax selain itu saya juga menggunakan library paho-Mqtt dari ajax untuk dapat terkoneksi ke MQTT Broker.</li>
<li>Backend: MQTT Broker adalah protokol pesan berbasis standar, atau seperangkat aturan, yang digunakan untuk komunikasi mesin-ke-mesin. Protokol MQTT telah menjadi standar untuk transmisi data IoT karena memberikan manfaat seperti Dapat diskalakan, Dapat diandalkan, dan Aman</li>
</ul>
</table>

Dengan project ini, kami bertujuan untuk menciptakan sebuah aplikasi web yang memiliki teknologi canggih seperti IoT untuk mempermudah pertukaran antar informasi yang lebih cepat dan efisien terutama dibidang industri.


## Skenario Kebutuhan Pengguna
<strong>Pengguna</strong>
<ol>
<li>Input departement yang dibutuhkan</li>
<li>Input produk yang dibutuhkan serta menentukan jumlah dan satuan agar informasi pasti dan mengurangi terjadinya mis informsi</li>
<li>Tombol ON/OFF andon</li>
<li>Pesan status pengiriman informasi</li>
</ol>

## Screenshot
<table width="100%">
<tr>
<td><h3 align="center">Input departement</h3><img src="foto/Awal (2).png"></td>
<td><h3 align="center">Connect departement/Topic Mqtt Broker</h3><img src="foto/ke 2.png"></td>
</tr>
<tr>
<td><h3 align="center">Input jenis produk/prat</h3><img src="foto/ke3.png"></td>
<td><h3 align="center">Input semua informasi abnormal</h3><img src="foto/ke4.png"></td>
</tr>
<tr>
<td><h3 align="center">Aktifkan andon</h3><img src="foto/ke5.png"></td>
<td><h3 align="center">Matikan andon</h3><img src="foto/ke6.png"></td>
</tr>
<tr>
<td><h3 align="center">ESP8266 Menerima pesan dan aktif</h3><img src="foto/ke8.png"></td>
<td><h3 align="center">ESP8266 Menerima pesan nonaktif</h3><img src="foto/ke7.png"></td>
</tr>
</table>

## Lisensi

Project ini dibuat untuk melakukan perbaikan kaizen pada perusahaan industri dan tranformasi budaya industri 4.0. Project ini dibuat dan dikembangkan oleh <a href="https://github.com/dms901">Dimas Mulyadi.</a> Project ini bersifat open source untuk edukasi.

<blockquote>Jangan berhenti untuk mencoba !!!</blockquote>

