# 🛠️ Laravel CRUD App

This is a simple and clean **CRUD (Create, Read, Update, Delete)** application built using **Laravel** — the elegant PHP web framework for modern web artisans.

This app manages a list of users (or any custom resource) through a responsive UI and intuitive backend structure. 

It demonstrates full-stack capabilities with Laravel's MVC architecture, Eloquent ORM, routing, and the Blade templating engine.

---

## 📦 Features

* ✅ Create new entries via a Bootstrap-powered form
* 📃 View a paginated, styled table of all records
* ✏️ Edit individual records with dynamic form population
* ❌ Delete records securely with CSRF protection and confirmation
* 💾 Store and retrieve data using Laravel's Eloquent ORM and MySQL
* 🖥️ Responsive, user-friendly UI (built with Bootstrap 5)
* 🧪 Input validation with Laravel's built-in form request handling
* 🔄 Flash messages for form actions (create/update/delete)


---

## 🧰 Tech Stack

| Layer        | Technology                                |
| ------------ | ----------------------------------------- |
| Framework    | Laravel 10.x                              |
| Language     | PHP 8.x                                   |
| Database     | MySQL / MariaDB                           |
| Frontend     | Blade Templates + Bootstrap 5             |
| Dev Tools    | Laravel Artisan CLI, Composer             |
| Versioning   | Git + GitHub                              |
| Local Server | Laravel's built-in server / XAMPP / Valet |

---

## 🚀 Getting Started

### 1. Clone the Repo

```bash
git clone git@github.com:VAL-Jerono/CRUD---LV.git
cd CRUD---LV
````

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

Generate app key:

```bash
php artisan key:generate
```

Update `.env` with your database details:

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 4. Run Migrations

```bash
php artisan migrate
```

### 5. Start the Server

```bash
php artisan serve
```

Visit the app at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📁 Folder Structure

* `app/Models/` – Eloquent models
* `app/Http/Controllers/` – Controllers handling CRUD logic. Logic for resource operations.
* `resources/views/` – Blade templates for UI
* `routes/web.php` — Route definitions for all views/actions
* `database/migrations/` — Schema files for the database
---

## ✨ Usage Guide

After running `php artisan serve`:

* **Create:** Click on "Add New" to create a new entry.
* **Read:** View all entries on the homepage.
* **Update:** Click "Edit" next to any entry.
* **Delete:** Click "Delete" to remove an entry. (with confirmation prompt)

- All routes are protected by Laravel’s CSRF middleware to ensure safe data handling.


---

## 🧪 Validation Rules

Basic validation is handled in the controller using:

```php
$request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email',
]);
```

---

## 💡 Customisation Ideas ( Room for Growth )

Here’s how you can evolve this app:

### 🔍 UX Improvements

* Add **pagination** using `paginate()` for large datasets
* Integrate **search** & **filtering** (by name, email, etc.)
* Use **Toasts** for real-time user feedback

### 🧑‍💼 Authentication & Access Control

* Scaffold **user authentication** using Laravel Breeze or Jetstream
* Introduce **admin-only controls** using Laravel Policies or Gates

### 🔗 RESTful API & Frontend

* Add **API endpoints** with Laravel Resources & API controllers
* Build a **Vue.js or React frontend** to consume your API
* Use **Livewire or Inertia.js** for dynamic Laravel-SPA hybrids

### 🧠 DevOps & Deployment

* Setup **Docker** containers with Laravel Sail
* Deploy to **Heroku**, **DigitalOcean**, or **Laravel Forge**
* Add **GitHub Actions** for automated testing & deployment

---

## 🧑‍💻 Author

**Valerie Jerono** 
* Laravel -Developer & Data Enthusiast
* GitHub: [@VAL-Jerono](https://github.com/VAL-Jerono)

---

## 📜 License

This project is open-sourced under the MIT License. See the `LICENSE` file for details.

---
