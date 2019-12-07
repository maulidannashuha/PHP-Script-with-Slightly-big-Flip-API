# PHP-Script-with-Slightly-big-Flip-API

Ini adalah service yang melakukan proses request penarikan saldo melalui Slightly-big Flip API. Service dikembangkan dengan menggunakan bahasa pemrograman PHP dan memanfaatkan curl extension untuk melakukan request ke API.

## Requirement
* PHP
* Curl Extension

## Config File
Config database pada service ini dapat diubah pada file */config/database.php* yang akan berisi config seperti berikut.
```php
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPWD','');
define('DBNAME','flip');
```

## How To Run
### Migration
Tabel yang dibutuhkan pada service ini dapat dibuat dengan menjalankan command berikut pada Terminal/CMD.
```
php migration.php
```
### Create Request Disburse
Proses mengirimkan request penarikan saldo dapat dilakukan dengan menjalankan command pada terminal. Command yang dijalankan memiliki format seperti berikut.
```
php create_disburse.php bank_code account_number amount remark
```
Contoh command untuk mengirimkan request penarikan saldo adalah sebagai berikut.
```
php create_disburse.php bni 1234567890 10000 'sample remark'
```
### Get Update Disburse
Proses mengirimkan request pengecekan request penarikan saldo dapat dilakukan dengan menjalankan command terminal. Command yang dijalankan memiliki format seperti berikut.
```
php get_disburse.php disburse_id
```
Contoh command untuk mengirimkan request pengecekan request penarikan saldo adalah sebagai berikut.
```
php get_disburse.php 5564470
```
