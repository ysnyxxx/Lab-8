# Lab Activity 8 – PHP CRUD Web Application

## 📘 Overview
This project is part of Lab 8 from the *BIC21203 Web Development* course at Universiti Tun Hussein Onn Malaysia (UTHM). The objective was to create a dynamic, server-side web application using PHP and MySQLi that supports user authentication and CRUD operations on a MySQL database.

---

## 🚀 Features
- ✅ User registration and login system
- 🔐 Session-based access control using `auth.php`
- 📥 Insert new records into `new_record` table
- 📋 View records (limited to 10 most recent)
- ✏️ Edit existing records
- 🗑️ Delete records safely
- 📁 Organized folder structure with reusable components

---

## 🗂️ File Structure

| File / Folder      | Purpose                                        |
|--------------------|------------------------------------------------|
| `db.php`           | Database connection setup                      |
| `auth.php`         | Session protection for restricted pages        |
| `index.php`        | Entry point; redirects to dashboard            |
| `login.php`        | Handles login and session creation             |
| `registration.php` | Registers new users with form + validation     |
| `dashboard.php`    | Main menu with links to CRUD operations        |
| `insert.php`       | Form to insert new record into database        |
| `view.php`         | Displays latest records with edit/delete links |
| `edit.php`         | Modify a selected record                       |
| `delete.php`       | Deletes a record securely                      |
| `logout.php`       | Ends session and redirects to login page       |
| `css/style.css`    | Basic styling for layout and forms             |

---

## 🧰 Technologies Used
- PHP 8
- MySQL / PhpMyAdmin
- HTML / CSS
- XAMPP (Apache + MySQL)

---

## 🛠 Setup Instructions

1. Start Apache and MySQL in XAMPP
2. Place project folder in `C:\xampp\htdocs\php-register`
3. Create a database named `register` in PhpMyAdmin
4. Create tables:
   - `users` for authentication
   - `new_record` for CRUD operations
5. Import sample data or use `registration.php` to add users
6. Visit:  
