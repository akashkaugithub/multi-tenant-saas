# Laravel Multi-Tenant SaaS API

## 📌 Description

Yeh ek Laravel-based SaaS backend hai jisme har user apni multiple companies create, update, delete kar sakta hai aur unmein switch kar sakta hai. Har kaam current active company ke under hota hai.

---

## 🛠️ Tech Stack

- Laravel 10
- Laravel Breeze (API)
- MySQL
- Laravel Sanctum (Authentication)

---

## ⚙️ Setup Instructions

```bash
git clone https://github.com/<username>/<repo-name>.git
cd multi-tenant-saas
composer install
cp .env.example .env
php artisan key:generate
# .env file mein DB settings set karo
php artisan migrate
php artisan serve
