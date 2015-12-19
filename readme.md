## PSB ONLINE MIAS 2016/2017

### Langkah Instalasi

1. Clone source code

```
git clone https://github.com/udibagas/sidik.git
```

2. Install dependency composer

```
cd sidik
composer install
```

4. Copy .env.example ke .env

```
cp .env.example .env
```

5. Sesuaikan setingan .env di bagian berikut

    DB_HOST
    DB_DATABASE
    DB_USERNAME
    DB_PASSWORD

3. Generate App Key

```
php artisan key:generate
```

3. Migrate database Schema

```
php artisan migrate
```

4. Seed Database

```
php artisan db:seed
```

5. Login menggunakan user: panitiapsbmias@gmail.com pass: password
