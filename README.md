# Apartment Management System

A web-based Apartment Management System built with PHP and MySQL. This system allows administrators, building owners, and tenants to manage apartments, buildings, ownership, tenants, and rent transactions efficiently.

## Features

- **Admin Panel**: Manage buildings, apartments, and owners.
- **Owner Panel**: Register and manage tenants, view tenant details, send SMS notifications.
- **Tenant Panel**: View personal details, pay rent, view payment history.
- **Authentication**: Separate login for admin, owners, and tenants.
- **Building & Apartment Management**: CRUD operations for buildings and apartments.
- **Ownership Management**: Assign apartments to owners.
- **Tenant Management**: Register tenants, assign apartments, manage rent.
- **Transaction Tracking**: Record and view rent payments.
- **Bulk SMS**: Send notifications to tenants.

## Project Structure

```
.
├── apartment.php
├── building.php
├── buildingNew.php
├── conn.php
├── index.php
├── loginHandler.php
├── logout.php
├── ologin.php
├── oregistration.php
├── ovalidate.php
├── payment.php
├── send.php
├── sendbulk.php
├── sms.php
├── tenant.php
├── tenantReg.php
├── tlogin.php
├── tnav.php
├── tvalidate.php
├── viewtenants.php
├── css/
│   ├── bootstrap.min.css
│   ├── main.css
│   └── util.css
├── fonts/
├── img/
├── js/
├── restful/
│   ├── getAprts.php
│   └── getAprtsTenant.php
├── sql/
│   └── apartment.sql
└── vendor/
```

## Database Schema

The database schema is defined in [`sql/apartment.sql`](sql/apartment.sql). It includes the following tables:

- `admin`: Admin users for the system.
- `building`: Building details.
- `apartment`: Apartments within buildings.
- `owner`: Owners of apartments.
- `tenant`: Tenants renting apartments.
- `transactions`: Records of rent payments.

## Setup Instructions

### 1. Requirements

- PHP 5.6+ (recommended PHP 7+)
- MySQL/MariaDB
- Apache/Nginx web server
- Composer (for dependency management, if needed)

### 2. Database Setup

1. Create a MySQL database named `apartment`.
2. Import the schema:

   ```sh
   mysql -u youruser -p apartment < sql/apartment.sql
   ```

3. Update database credentials in [`conn.php`](conn.php):

   ```php
   // conn.php
   $con = mysqli_connect("localhost", "youruser", "yourpassword", "apartment");

   ## How to Import the Database

1. **Open phpMyAdmin** (or your preferred MySQL client).
2. **Create a new database** named `apartment`.
3. **Import the SQL file**:
   - In phpMyAdmin, select the `apartment` database.
   - Click the **Import** tab.
   - Choose the file:  
     `sql/apartment.sql`
   - Click **Go** to import.

   Alternatively, use the MySQL CLI:
   ```sh
   mysql -u youruser -p apartment < sql/apartment.sql
   ```

## How to Run the Project from VS Code

1. **Open the project folder** in VS Code.
2. **Start your local web server** (e.g., XAMPP, WAMP, or built-in PHP server).
   - If using the built-in PHP server, run this in the terminal:
     ```sh
     php -S localhost:8000
     ```
   - Make sure your working directory is the project root.
3. **Open your browser** and go to:
   - `http://localhost:8000` (if using PHP built-in server)
   - or `http://localhost/Apartment-Management-System` (if using XAMPP/WAMP and placed in `htdocs`)
4. **Login** using the default admin credentials:
   - Email: `admin@gmail.com`
   - Password: `admin123`

> **Tip:** You can use the VS Code extension "PHP Server" to quickly launch a local server from the editor.



### 3. Running the Application

1. Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP).
2. Ensure the `img/`, `fonts/`, and `css/` directories are accessible.
3. Open your browser and navigate to `http://localhost/index.php`.

### 4. Default Credentials

- **Admin**
  - Email: `admin@gmail.com`
  - Password: `admin123`

- **Owner/Tenant**
  - Register via the provided registration forms.

## Key Files

- [`index.php`](index.php): Landing page and login options.
- [`building.php`](building.php): Manage buildings.
- [`apartment.php`](apartment.php): Manage apartments.
- [`oregistration.php`](oregistration.php): Register new owners.
- [`tenantReg.php`](tenantReg.php): Register new tenants.
- [`tenant.php`](tenant.php): Tenant dashboard.
- [`viewtenants.php`](viewtenants.php): Owner's view of tenants.
- [`payment.php`](payment.php): Rent payment processing.
- [`send.php`](send.php), [`sendbulk.php`](sendbulk.php): SMS notification features.

## RESTful Endpoints

- [`restful/getAprts.php`](restful/getAprts.php): Fetch available apartments for a building.
- [`restful/getAprtsTenant.php`](restful/getAprtsTenant.php): Fetch apartments for tenant assignment.

## Customization

- Update styles in [`css/main.css`](css/main.css) and [`css/util.css`](css/util.css).
- Add images to the `img/` directory for backgrounds and branding.
- Extend functionality by adding new PHP scripts or enhancing existing ones.

## Security Notes

- Passwords are stored as plain text in the current schema. **It is strongly recommended to hash passwords** using PHP's `password_hash()` and `password_verify()` for production use.
- Validate and sanitize all user inputs to prevent SQL injection and XSS attacks.

## License

This project is for educational purposes. Please review and update the code for production use.

---

**Author:** Francis Masila  
**Contact:** francismusyoki1039@gmail.com
