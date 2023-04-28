<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Start

Creat File .env
```sh
cp .env.example .env
```

Upload the project containers
```sh
docker-compose up -d
```


Access the container
```sh
docker-compose exec app bash
```


Install project dependencies
```sh
composer install
```

Creat DataBase
```sh
php artisan db:create
```

Creat Tables
```sh
php artisan migrate
```

Populate the database
```sh
php artisan db:seed
```

Access the project
[http://localhost:8989](http://localhost:8989)


## API Routs

Login
```sh
curl --request POST \
  --url http://localhost:8989/api/auth/login \
  --header 'Content-Type: multipart/form-data' \
  --form email=wisoky.eden@example.org \
  --form password=AGS@123.
```

Logout
```sh
curl --request POST \
  --url http://localhost:8989/api/logout \
  --header 'Authorization: Bearer 2|NPDtlBes7OGXdb6GNqFzf9FEmzF8SXHemtxc6j73'
```


Logout
```sh
curl --request POST \
  --url http://localhost:8989/api/logout \
  --header 'Authorization: Bearer 2|NPDtlBes7OGXdb6GNqFzf9FEmzF8SXHemtxc6j73'
```

Get Books
```sh
curl --request GET \
  --url http://localhost:8989/api/books \
  --header 'Authorization: Bearer 1|ygcopyMDyWkGhIR4gppYKL9WRkTfIbkWbnj7AiVc' \
  --header 'Content-Type: multipart/form-data' \
  --form email=wisoky.eden@example.org \
  --form password=AGS@123.
```

Get Book
```sh
curl --request GET \
  --url http://localhost:8989/api/books/55 \
  --header 'Authorization: Bearer 1|ygcopyMDyWkGhIR4gppYKL9WRkTfIbkWbnj7AiVc' \
  --header 'Content-Type: multipart/form-data' \
  --form email=wisoky.eden@example.org \
  --form password=AGS@123.
```

Creat Book
```sh
curl --request POST \
  --url http://localhost:8989/api/books \
  --header 'Authorization: Bearer 1|ygcopyMDyWkGhIR4gppYKL9WRkTfIbkWbnj7AiVc' \
  --header 'Content-Type: multipart/form-data' \
  --form name=Teste2 \
  --form isbn=123 \
  --form value=10.33
```


Update Book
```sh
curl --request PUT \
  --url http://localhost:8989/api/books/55 \
  --header 'Authorization: Bearer 1|ygcopyMDyWkGhIR4gppYKL9WRkTfIbkWbnj7AiVc' \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --data isbn=1235
```

Delet Book
```sh
curl --request DELETE \
  --url http://localhost:8989/api/books/55 \
  --header 'Authorization: Bearer 1|ygcopyMDyWkGhIR4gppYKL9WRkTfIbkWbnj7AiVc' \
  --header 'Content-Type: application/x-www-form-urlencoded'
```
