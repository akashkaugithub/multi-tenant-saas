# Laravel Multi-Tenant SaaS API

## 📌 Description

This is a Laravel-based SaaS backend where each user can create, update, and delete multiple companies and switch between them. All operations are performed under the scope of the currently active company.

---

## 🛠️ Tech Stack

- Laravel 10
- Laravel Breeze (API)
- MySQL
- Laravel Sanctum (Authentication)

---

## ⚙️ Setup Instructions

```bash
git clone https://github.com/akashkaugithub/multi-tenant-saas
cd multi-tenant-saas
composer install
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
