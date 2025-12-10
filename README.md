# Simple Program Management Web App  
A Laravel + PostgreSQL application built as part of a Fullstack Developer Technical Test.  
This project provides a simple management system for **Programs** and **Categories**, complete with authentication, CRUD operations, API endpoints, and clean UI using Blade.

---

## 🚀 Features  
### 🔐 Authentication  
- User Registration  
- User Login / Logout  
- Protected routes using Laravel Breeze  

### 📦 Category Management (CRUD)  
- Create, Read, Update, Delete categories  
- Validation  
- Flash alerts for success/error  
- Clean table UI  

### 🎓 Program Management (CRUD)  
- Create program with:  
  - Name  
  - Category (relational)  
  - Price  
  - Start date  
- Edit & Delete program  
- Category dropdown (relational handling)  

### 🌐 API Endpoints (Optional Requirement Completed)  
- `GET /api/categories`  
- `POST /api/categories`  
- `GET /api/programs`  
- `POST /api/programs`  
Includes JSON response formatting using API Resources.

### 🗄 Database  
Using **PostgreSQL** with proper relational structure.

**ERD:**  
- `categories` (1) —— (∞) `programs`

### ✔ Validations  
- Required fields  
- Category exists  
- Price and start_date handling  
- Error messages included  

---

## 🏛 Tech Stack  
- **Laravel 10**  
- **PostgreSQL**  
- **Laravel Breeze** (Auth scaffolding)  
- **Blade** (Frontend templating)  
- **Tailwind CSS**  
- **Postman** (API testing)  

---

## 🛠 Installation & Setup

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/program-management.git
cd program-management

Install Dependencies
composer install
npm install
npm run dev

3️⃣ Environment Setup

Copy .env.example → .env
Configure your PostgreSQL settings:

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=program_management
DB_USERNAME=postgres
DB_PASSWORD=your_password

4️⃣ Run Migrations & Seeders
php artisan migrate --seed

5️⃣ Start the Server
php artisan serve
