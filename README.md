<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Video Manager

## Instructions

1. Clone the repository

```bash
git clone https://github.com/RKOrtega94/video_manager.git
```

2. Install dependencies

```bash
composer install
```

3. Create a database and configure the .env file

```bash
cp .env.example .env
```

4. Generate the application key

```bash
php artisan key:generate
```

5. Run migrations

```bash
php artisan migrate
```

`To initialize the database with some data, run the following command`

```bash
php artisan db:seed
```

`or if you want to refresh the database`

```bash
php artisan migrate:fresh --seed
```

6. Run the application

```bash
npm run dev # this command will compile the assets
```

```bash
php artisan serve # this command will run the application
```

## Testing

Before running the tests, you must create a database for testing and configure the .env.testing file

```bash
cp .env.example .env.testing
```

Replace database configuration with the testing database (if not set, the application will use the default database)

```conf
DB_CONNECTION=sqlite
DB_DATABASE=:memory:
```

`If you're using sqlite, make sure in php.ini that sqlite3 is enabled`

```conf
extension=pdo_sqlite
extension=sqlite3
```

Generate the application key

```bash
php artisan key:generate --env=testing
```

Run the tests

```bash
php artisan test
```

## Api

The api authentication is provided by passport, so you must run the following command to generate the keys

```bash
php artisan passport:install
```

### Create personal client

```bash
php artisan passport:client --personal
```

### Endpoints

#### Login

```CURL
POST /api/login
```

```JSON
{
    "email": "ADMIN EMAIL",
    "password": "ADMIN PASSWORD"
}
```

#### Views report

```CURL
GET /api/reports/views
```

#### Search report

```CURL
GET /api/reports/search
```
