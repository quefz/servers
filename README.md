# Пример проекта "Сервера"

Установка пакетов

```sh
composer install
npm install
```

Настройка окружения

```sh
cp .env.example .env
php artisan key:generate
```

Применение миграции

```sh
php artisan migrate
```

Сборка фронтенда

```sh
npm run build
```

Запуск бекенда (локально)

```sh
php artisan serve
```
