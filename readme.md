## Установка
```
docker-compose up -d --build
```
- В терминале перейти в контейнер PHP:
```
docker exec -it car_php bash
```
composer install

скопировать с заменой файл env.example в папку backend и переименовать в .env
php artisan migrate --seed
```

- в host прописать 127.0.0.1 cars.local
- сайт http://cars.local
- PGAdmin http://localhost:5555  
login: admin@admin.com  
password: admin