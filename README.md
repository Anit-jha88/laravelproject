# Laravel Online Exam - Docker

Laravel Online Exam application using:

* Laravel
* PHP 8.3
* Apache
* MySQL 8.0
* Docker
* Docker Compose
* Node.js / Vite

## Project Files

```text
laravelproject/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── .env
├── .env.example
├── .dockerignore
├── Dockerfile
├── docker-compose.yml
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
└── README.md
```

## Requirements

* Ubuntu / AWS EC2
* Docker
* Docker Compose

Node.js/npm is not required on the host.

## Run Project

Clone project:

```bash
git clone YOUR_REPOSITORY_URL
cd laravelproject
```

Create environment file:

```bash
cp .env.example .env
```

Set database in `.env`:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=http://YOUR_EC2_IP:8080

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=online_exam
DB_USERNAME=root
DB_PASSWORD=
```

Build and start:

```bash
docker compose up -d --build
```

Generate key if required:

```bash
docker compose exec app php artisan key:generate
```

Run migrations:

```bash
docker compose exec app php artisan migrate
```

Clear cache:

```bash
docker compose exec app php artisan optimize:clear
```

Check containers:

```bash
docker compose ps
```

## Access

```text
http://YOUR_EC2_IP:8080
```

Login:

```text
http://YOUR_EC2_IP:8080/login
```

Register:

```text
http://YOUR_EC2_IP:8080/register
```

## Useful Commands

Start:

```bash
docker compose up -d
```

Rebuild:

```bash
docker compose up -d --build
```

Stop:

```bash
docker compose down
```

Logs:

```bash
docker compose logs app --tail=100
```

MySQL logs:

```bash
docker compose logs mysql --tail=100
```

Laravel shell:

```bash
docker compose exec app bash
```

Database migration:

```bash
docker compose exec app php artisan migrate
```

Clear cache:

```bash
docker compose exec app php artisan optimize:clear
```

## AWS EC2

Open port `8080` in the EC2 Security Group.

```text
Type: Custom TCP
Port: 8080
Source: 0.0.0.0/0
```

Then access:

```text
http://YOUR_EC2_PUBLIC_IP:8080
```

## Database

```text
Database: online_exam
Host: mysql
Port: 3306
Username: root
Password: empty
```

MySQL data is stored in the Docker volume:

```text
mysql_data
```

Do not use:

```bash
docker compose down -v
```

unless you intentionally want to delete the database volume.

## Vite

Frontend assets are automatically built during Docker image build:

```bash
npm install
npm run build
```

No Node.js installation is required on the EC2 host.

## Troubleshooting

Check Laravel logs:

```bash
docker compose exec app tail -n 100 storage/logs/laravel.log
```

Check Apache logs:

```bash
docker compose exec app tail -n 100 /var/log/apache2/error.log
```

Check MySQL:

```bash
docker compose exec mysql mysqladmin -uroot ping
```

Check MySQL connection:

```bash
docker compose exec app php artisan migrate:status
```

## Author

Anit Kumar Jha
