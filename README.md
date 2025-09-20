# Car Wash Booking Website

This project are made as a submission challange of database schema for car wash booking website. Project by `Laurentius Nicholas C.`

## Run The Project

Follow these step to run the migration locally

### 1\. Clone Repository

```bash
git clone https://github.com/laurentiusn/car-wash-booking.git
```
```bash
cd .\car-wash-booking\
```

### 2\. Install Dependency

```bash
composer install
```

### 3\. Environment Configuration

Copy `.env.example` into `.env`

```bash
cp .env.example .env
```

Open `.env` file and set the database configuration

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[nama_database_anda]
DB_USERNAME=[user_database_anda]
DB_PASSWORD=[password_database_anda]
```

Default configuration database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=car_wash_book
DB_USERNAME=root
DB_PASSWORD=
```

### 4\. Generate Application Key
Generate application key to run the project
```bash
php artisan key:generate
```

### 5\. Migration

Run MySQL on XAMPP (or Laragon). Then, run the following command:

```bash
php artisan migrate
```
If there is a database name that is the same as database name on `.env` configuration, then execute this command to drop all table on the database:

```bash
php artisan migrate:fresh
```

## ERD
![ERD Sistem Booking Car Wash](./public/ERD.jpg)

| Note ||
| :-------: | :----------- |
| `PK`      | Primary Key  |
| `FK`      | Foreign Key  |
| `UNQ`     | Unique       |
| `NN`      | Not Nullable |