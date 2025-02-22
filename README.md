# PHP Lab Programs

This repository contains all of PHP Lab programs. To run these programs, you'll need a local PHP development environment. **XAMPP** is a popular and easy-to-use option.

## Running PHP Programs with XAMPP

Follow these steps to run the PHP programs in this repository:

1.  **Install XAMPP:**
    * Download **XAMPP** from the official Apache Friends website: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
    * Install **XAMPP** on your computer.

2.  **Start Apache and MySQL:**
    * Open the **XAMPP Control Panel**.
    * Click the "**Start**" button for both **Apache** and **MySQL** services.

3.  **Place PHP Files in `htdocs`:**
    * Navigate to your **XAMPP** installation directory (usually `C:\xampp`).
    * Open the `htdocs` folder.
    * Copy the PHP files from this repository into the `htdocs` folder or a subdirectory within it.

4.  **Access the Programs in Your Browser:**
    * Open your web browser.
    * In the address bar, type `http://localhost/your_php_file.php` (replace `your_php_file.php` with the actual filename of the PHP program you want to run).
    * If you placed the files in a subdirectory, use `http://localhost/subdirectory/your_php_file.php`.
    * for simple and easy access create a folder inside `htdocs`then in your browser type: `http://localhost/your_folder_name`. this will show all the program files you stored on that folder (replace `your_folder_name` with the actual folder name you created).
5.  **For Programs Using MySQL (Databases):**
    * If a program requires a **MySQL** database, create the necessary database and tables using **phpMyAdmin**:
        * Open **phpMyAdmin** in your browser: `http://localhost/phpmyadmin`.
        * Create the database.
        * Create the necessary tables and insert any required data.

## Example

For example, to run the `1-FACTORIAL.php` program:

1.  Place the `1-FACTORIAL.php` file in your `C:\xampp\htdocs` folder.
2.  Open your browser and go to `http://localhost/1-FACTORIAL.php`.

## Running the Authentication Program (11-AUTHENTICATION WEB PAGE CHECK USERNAME & PASSWORD.php)

The `11-AUTHENTICATION WEB PAGE CHECK USERNAME & PASSWORD.php` program requires a database setup. Follow these steps to run it:

1.  **Install XAMPP:**
    * (Same as above)

2.  **Start Apache and MySQL:**
    * (Same as above)

3.  **Place the PHP File in `htdocs`:**
    * (Same as above)

4.  **Create the `phplogin` Database:**
    * Open phpMyAdmin in your browser: `http://localhost/phpmyadmin`.
    * Click on the "Databases" tab.
    * In the "Create database" field, type `phplogin`.
    * Click the "Create" button.

5.  **Create the `users` Table:**
    * Select the `phplogin` database from the left-hand menu.
    * Click on the "SQL" tab.
    * Paste the following SQL code into the text area:

        ```sql
        CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(255) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL
        );
        ```

    * Click the "Go" button.

6.  **Add a Test User:**
    * Still in the "SQL" tab of phpMyAdmin, paste the following SQL code, replacing `'your_username'` and `'your_password'` with your desired username and password:

        ```sql
        INSERT INTO users (username, password) VALUES ('your_username', 'your_password');
        ```

        * **Example:**

            ```sql
            INSERT INTO users (username, password) VALUES ('testuser', 'password123');
            ```

    * Click the "Go" button.
    * **Warning:** This is for testing only. In a real application, you should hash the password before storing it in the database.

7.  **Access the Login Page:**
    * Open your web browser.
    * In the address bar, type `http://localhost/11-AUTHENTICATION WEB PAGE CHECK USERNAME & PASSWORD.php` and press Enter.
    * You should see the login form.

8.  **Login:**
    * Enter the username and password you added to the `users` table in step 6.
    * Click the "Login" button.

9.  **View the Result:**
    * If the login is successful, you should see "Login successful!" displayed.
    * If the login fails, you should see "Incorrect username or password." displayed.

## Note

* Ensure that your **XAMPP Apache** and **MySQL** services are running before trying to access the programs.
* If you encounter any errors, check the **Apache error logs** located in `C:\xampp\apache\logs` for more information.
* For programs that use databases, make sure your **database credentials** in the PHP files are correct.
