FROM bitnami/laravel:12.0.4

WORKDIR /app

COPY . .

RUN cp .env.example .env

RUN composer install
RUN npm install && npm run build
RUN php artisan key:generate
RUN touch database.sqlite
RUN sed -i 's/^DB_DATABASE=.*/DB_DATABASE=\/app\/database.sqlite/' .env
RUN sed -i "s/^APP_ENV=.*/APP_ENV=production/" .env
RUN php artisan config:cache
RUN php artisan migrate --force

EXPOSE 8000

CMD ["php", "artisan", "serve"]