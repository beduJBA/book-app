# Mini Book Management App

Track books in a personal library — create, edit, search, and annotate your collection.

## ✨ Features

- Add, edit, and delete books with live validation
- Search titles & authors (URL-driven, shareable)
- Inline note editing
- Pagination
- Authorization (each user only manages their own books)

## 🛠️ Built With

- Laravel 12
- Livewire 3
- Tailwind CSS + Alpine.js
- Vite
- Pest

## 📋 Requirements

- PHP ^8.2
- Composer
- Node + npm
- MySQL

## 🚀 Installation

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install
npm run build
```

Alternatively, the `composer setup` script runs all of the above for you.

Seed a test user:

```bash
php artisan db:seed
```

This creates a user with the email `test@example.com`.

## ▶️ Running locally

```bash
php artisan serve
npm run dev
```

Or use `composer dev` to run the server, queue worker, log reader, and Vite together.

## 🧪 Testing

```bash
composer test
```

## 📄 License

The Mini Book Management App is open-sourced software licensed under the [MIT license](LICENSE).