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
   git clone [repository-url]
   cd Bootcamp-KerajinanTangan
   ```

2. **Install dependencies**

   ```bash
   composer install
   ```

    and then do

    ```bash
   php artisan key:generate
   ```

3. **Publish the Laravel Modules Service Provider**

   ```bash
   php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"
   ```

4. **Dump the autoload files**

   ```bash
   composer dump-autoload
   ```

5. **Publish the Permission Service Provider**

   ```bash
   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
   ```

6. **Clear optimization caches**

   ```bash
   php artisan optimize:clear
   ```

7. **Set up environment file**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

8. **Configure your database in the .env file**

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

9. **Run database migrations**

   ```bash
   php artisan migrate
   ```

10. **Start the development server**

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