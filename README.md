++### To Do App (Local)

A small PHP/MySQL web application to manage personal tasks.

**Link for the webpage**

http://antodoapp.atwebpages.com/

**Prerequisites**

- PHP (7.4+ recommended)
- MySQL / MariaDB
- XAMPP (or another Apache + PHP + MySQL stack)
- A browser for testing

**Repository contents**

- PHP front-end files: root .php files
- JavaScript: `js/`
- CSS: `css/`
- PHP backend: `php/` (contains DB connection and processing)
- Database SQL dump: `database/projectdb.sql`


**Local setup (quick)**

1. Clone or copy the project into your local web server directory (e.g., `C:\xampp\htdocs\TO_DO_APP`).

2. Start Apache and MySQL (e.g., via XAMPP Control Panel).

3. Create the database and import the schema:

   - Open phpMyAdmin (typically http://localhost/phpmyadmin).
   - Create a new database (default name used in the project: `an74`).
   - Import the SQL file: `database/projectdb.sql`.

4. Configure database credentials:

   Edit `php/db.php` and update the connection settings to match your local environment. Example:

```php
$servername = "localhost"; // usually "localhost"
$username   = "root";      // your DB user
$password   = "";          // your DB password (XAMPP default is empty)
$dbname     = "an74";      // database name you created
```

5. Open the app in your browser:

   http://localhost/TO_DO_APP/

---

**Test account**

Username: `Admin`

Password: `Test@123`

If you prefer, register your own account instead of using the test account.

---

**Contribution / Changes**

- For local fixes, create a feature branch, commit with clear messages, and open a Pull Request to merge into `main`.


