# Installation Guide

This document provides step-by-step instructions for setting up the Bootcamp-KerajinanTangan project.

## Prerequisites

- PHP 8.0 or higher
- Composer
- MySQL or compatible database
- Laravel requirements

## Installation Steps

1. **Clone the repository**

   ```bash
   git clone https://github.com/neekaru/kreasikita
   cd kreasikita
   ```

2. **Install dependencies**

   ```bash
   composer install
   ```

3. **Dump the autoload files**

   ```bash
   composer dump-autoload
   ```

4. **Set up environment file**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run database migrations**

   ```bash
   php artisan migrate
   ```

6. **Do a Storage Link**

   ```bash
   php artisan storage:link
   ```

7. **Start the development server**

    ```bash
    php artisan serve
    ```

## Additional Information

- The project uses [Laravel Modules](https://github.com/nWidart/laravel-modules) for modular development
- User permissions are managed with [Spatie Laravel Permission](https://github.com/spatie/laravel-permission)

## Troubleshooting

If you encounter any issues during installation, try the following:

- Clear all caches: `php artisan optimize:clear`
- Regenerate autoload files: `composer dump-autoload`
- Check Laravel logs in `storage/logs/laravel.log`