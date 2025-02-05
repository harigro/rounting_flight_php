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
- **PHP 7.4+**
- **Composer**
- **XAMPP** (opsional)

---

## **2. Instalasi**
### **a) Clone Repository (Opsional)**
```sh
git clone https://github.com/username/flight-app.git
cd flight-app
```

### **b) Install Flight PHP dengan Composer**
Jalankan perintah berikut di terminal/cmd dalam direktori proyek:
```sh
composer require mikecao/flight
```

---

## **3. Struktur Proyek**
```
/flight-app
├── /public
│   ├── index.php
├── /src
│   ├── routes.php
├── composer.json
├── .htaccess
```

- **`public/index.php`** → File utama yang menjalankan aplikasi  
- **`src/routes.php`** → Konfigurasi routing  
- **`.htaccess`** → Mengatur rewrite rule untuk akses yang bersih  

---

## **4. Konfigurasi Virtual Host (Opsional)**
Jika menggunakan **XAMPP**, bisa mengatur **Virtual Host** agar dapat mengakses proyek dengan nama domain khusus (`flight.local`).

1. **Edit `httpd-vhosts.conf`**
   Tambahkan konfigurasi berikut di:
   ```
   C:\xampp\apache\conf\extra\httpd-vhosts.conf
   ```
   ```
   <VirtualHost *:80>
       DocumentRoot "C:/xampp/htdocs/flight-app/public"
       ServerName flight.local
       <Directory "C:/xampp/htdocs/flight-app/public">
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

2. **Tambahkan Domain ke Hosts File**
   Edit file:
   ```
   C:\Windows\System32\drivers\etc\hosts
   ```
   Tambahkan:
   ```
   127.0.0.1 flight.local
   ```

3. **Restart Apache di XAMPP**

---

## **5. Menjalankan Aplikasi**
### **a) Dengan PHP Built-in Server**
Jalankan perintah berikut:
```sh
php -S localhost:8080 -t public
```
Buka di browser:
- `http://localhost:8080/`
- `http://localhost:8080/hello/Ali`
- `http://localhost:8080/about`

### **b) Dengan XAMPP (Tanpa Virtual Host)**
Akses di browser:
- `http://localhost/flight-app/public/`
- `http://localhost/flight-app/public/hello/Ali`
- `http://localhost/flight-app/public/about`

### **c) Dengan Virtual Host (Jika Dikustomisasi)**
Akses di browser:
- `http://flight.local/`
- `http://flight.local/hello/Ali`
- `http://flight.local/about`

---

## **6. Routing yang Tersedia**
| Endpoint             | Deskripsi                      |
|----------------------|----------------------------------|
| `/`                 | Menampilkan pesan selamat datang |
| `/halo/@nama`      | Menampilkan `Halo, {nama}!`    |
| `/perihal`           | Menampilkan halaman "perihal"    |

---

## **7. Lisensi**
Proyek ini menggunakan lisensi **MIT**. Silakan digunakan dan dimodifikasi sesuai kebutuhan.  

---

Jika ada pertanyaan atau saran, silakan buat **issue** atau **pull request**! 🚀