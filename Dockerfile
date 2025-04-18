FROM bitnami/laravel:12.0.4

WORKDIR /app

COPY . .

RUN composer install && npm install && npm run build

EXPOSE 8000

ENTRYPOINT touch database.sqlite && \
            cp .env.example .env && \
            php artisan config:cache && \
            php artisan migrate --force && \
            php artisan serve --host=0.0.0.0 --port=8000