# 🛠️ Laravel CRUD App

This is a simple and clean **CRUD (Create, Read, Update, Delete)** application built with [Laravel](https://laravel.com/) — a modern PHP web framework. 

The application manages a list of users (or any resource) with full CRUD operations and leverages Laravel's built-in MVC architecture, routing, and Blade templating engine.

---

## 📦 Features

- ✅ Create new entries via a clean, responsive form
- 📃 View a list of all records in a styled table
- ✏️ Edit individual records
- ❌ Delete records with confirmation
- 💾 Stores data using Laravel's Eloquent ORM and MySQL
- 🖥️ Simple, readable UI with Bootstrap 5
- 🧪 Basic validation to ensure data integrity

---

## 🧰 Tech Stack

| Layer        | Technology    |
|--------------|----------------|
| Framework    | Laravel 10.x   |
| Language     | PHP 8.x        |
| Database     | MySQL / MariaDB|
| Frontend     | Blade Templates + Bootstrap 5 |
| Version Control | Git & GitHub |
| Local Server | Laravel Artisan / XAMPP / Valet |

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
* `app/Http/Controllers/` – Controllers handling CRUD logic
* `resources/views/` – Blade templates for UI
* `routes/web.php` – Application routes

---

## ✨ Usage

After running `php artisan serve`:

* **Create:** Click on "Add New" to create a new entry.
* **Read:** View all entries on the homepage.
* **Update:** Click "Edit" next to any entry.
* **Delete:** Click "Delete" to remove an entry.

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

## 💡 Customisation Ideas

Want to take it further?

* Add pagination
* Include search/filter functionality
* Use Laravel Breeze/Jetstream for authentication
* Add API endpoints with Laravel Resources

---

## 🧑‍💻 Author

**Valerie Jerono** 
* Laravel -Developer & Data Enthusiast
* GitHub: [@VAL-Jerono](https://github.com/VAL-Jerono)

---

## 📜 License

This project is open-sourced under the MIT License. See the `LICENSE` file for details.

---
