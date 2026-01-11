++### To Do App (Local)

A small PHP/MySQL web application to manage personal tasks.

Demo (deployed):

https://web.njit.edu/~an74/is218project/

---

**Prerequisites**

- PHP (7.4+ recommended)
- MySQL / MariaDB
- XAMPP (or another Apache + PHP + MySQL stack)
- A browser for testing

**Repository contents (high level)**

- PHP front-end files: root .php files
- JavaScript: `js/`
- CSS: `css/`
- PHP backend: `php/` (contains DB connection and processing)
- Database SQL dump: `database/projectdb.sql`

---

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

**Notes & troubleshooting**

- If you see session-related warnings, ensure `session_start()` is called before manipulating sessions. See `logout.php` and other session files.
- If JavaScript changes (label/placeholder) don't appear, hard-refresh the page (Ctrl+F5) to clear cached scripts.
- If the site uses a different database name, update queries or change `$dbname` in `php/db.php` accordingly.

**Test account**

Username: `Admin`

Password: `Test@123`

If you prefer, register your own account instead of using the test account.

---

**Contribution / Changes**

- For local fixes, create a feature branch, commit with clear messages, and open a Pull Request to merge into `main`.

---

If you want, I can expand this README with screenshots, a development checklist, or common fixes observed while testing.
## Link for the webpage

https://web.njit.edu/~an74/is218project/

## Local configuration

In order to connect the web application with the local server,
you must go to the db.php file under the php folder and edit the following lines in the connection function.

LOCAL SERVER

$servername = "localhost:port"; //your server name, and port

$username = "root"; //your username

$password = "1234"; //your password

$dbname = "an74"; 

## Set up Local Database
The database is included under the folder database, where you will find the SQL file. In order to have the database available just download the file and imported it in PHPmyAdmin.
In order to make the application works, you have to name your database an74. Otherwise, you have to change the queries for all the projects.

## Test Account
I have created a test account for testing. Please find below the creadentials:

Username: Admin
Password: Test@123

If you do not want to use this account, you are more than welcome to register your own account.
