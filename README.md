# Car Wash Booking

Proyek ini sebagai submission challange pembuatan skema database untuk sistem car wash booking

## Menjalankan Project

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

### 1\. Clone Repositori

```bash
git clone https://github.com/laurentiusn/car-wash-booking.git
```
```bash
cd https://github.com/laurentiusn/car-wash-booking.git
```

### 2\. Instalasi Dependensi

```bash
composer install
```

### 3\. Konfigurasi Lingkungan

Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasinya.

```bash
cp .env.example .env
```

Buka file `.env` dan atur database:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[nama_database_anda]
DB_USERNAME=[user_database_anda]
DB_PASSWORD=[password_database_anda]
```

Konfigurasi database secara default:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=car_wash_book
DB_USERNAME=root
DB_PASSWORD=
```

### 4\. Generate Application Key

```bash
php artisan key:generate
```

### 5\. Menjalankan Migrasi dan Seeder (Penting\!)


```bash
php artisan migrate:fresh
```

## ERD
![ERD Sistem Booking Car Wash](./public/ERD.jpg)

| Singkatan | Deskripsi    |
| :-------: | :----------- |
| `PK`      | Primary Key  |
| `FK`      | Foreign Key  |
| `UNQ`     | Unique       |
| `NN`      | Not Nullable |