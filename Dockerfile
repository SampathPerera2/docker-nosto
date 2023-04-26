FROM lorisleiva/laravel-docker:8.1

COPY . .

RUN composer install

CMD php artisan serve --host=0.0.0.0
