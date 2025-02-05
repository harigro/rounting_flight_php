# **Flight PHP Routing Sederhana**

Proyek ini adalah contoh sederhana penggunaan **Flight PHP** sebagai framework mikro untuk membuat routing di PHP.  

## **Fitur**

- Routing dasar dengan Flight PHP  
- Mendukung parameter di URL  
- Menggunakan `.htaccess` untuk routing yang bersih  
- Bisa dijalankan di **XAMPP** atau **PHP built-in server**  

---

## **1. Persyaratan**

Pastikan sistem telah memiliki:

- **PHP == v8.2.12+**
- **Composer == v2.8.2**
- **XAMPP == v8.2.12** (opsional)

---

## **2. Instalasi**

### **a) Clone Repository (Opsional)**

```sh
git clone https://github.com/harigro/rounting_flight_php.git
cd rounting_flight_php
```

### **b) Instalasi semua dependensi menggunakan Composer**

Jalankan perintah berikut di terminal/cmd dalam direktori proyek:

```sh
composer install
```

---

## **3. Struktur Proyek**

```sh
/rounting_flight_php
├── /public
│   ├── index.php
│   ├── .htaccess
├── /src
│   ├── routes.php
├── composer.json
├── composer.lock
├── LICENCE
├── README.md
```

- **`public/index.php`** → File utama yang menjalankan aplikasi  
- **`public/.htaccess`** → Mengatur rewrite rule untuk akses yang bersih 
- **`src/routes.php`** → Konfigurasi routing

---

## **4. Konfigurasi Xampp**

Jika anda menggunakan `xampp` wajib mengisi file `.htaccess` dengan kode berikut :

```sh
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
</IfModule>
```

atau

```sh
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```

---

## **5. Menjalankan Aplikasi**

Jalankan perintah berikut

```sh
php -S localhost:8080 -t public
```

atau jika menggunakan menggunakan `xampp` arahkan ke direktori
```sh
rounting_flight_php/public
```

---

## **6. Routing yang Tersedia**

| Endpoint      | Deskripsi                        |
| ------------- | -------------------------------- |
| `/`           | Menampilkan pesan selamat datang |
| `/halo/@nama` | Menampilkan `Halo, {nama}!`      |
| `/perihal`    | Menampilkan halaman "perihal"    |

---

## **7. Lisensi**

Proyek ini menggunakan lisensi **MIT**. Silakan digunakan dan dimodifikasi sesuai kebutuhan.  

---

Jika ada pertanyaan atau saran, silakan buat **issue** atau **pull request**! 🚀