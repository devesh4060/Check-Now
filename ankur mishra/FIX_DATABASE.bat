@echo off
echo Fixing database connection...
echo.
echo Step 1: Make sure MySQL is running in XAMPP
echo Step 2: Open phpMyAdmin: http://localhost/phpmyadmin
echo Step 3: Run this SQL:
echo.
echo CREATE DATABASE IF NOT EXISTS hello_db;
echo USE hello_db;
echo CREATE TABLE IF NOT EXISTS new_db (
echo     id INT AUTO_INCREMENT PRIMARY KEY,
echo     name VARCHAR(100) NOT NULL,
echo     email VARCHAR(100) UNIQUE NOT NULL,
echo     password VARCHAR(255) NOT NULL,
echo     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
echo );
echo.
start http://localhost/phpmyadmin
pause