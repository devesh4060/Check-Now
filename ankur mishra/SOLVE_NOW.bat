@echo off
echo Starting XAMPP services...
C:\xampp\apache\apache_start.bat
C:\xampp\mysql\mysql_start.bat
timeout /t 3
echo Opening website...
start http://localhost/checknow-lab/
echo.
echo If database error appears:
echo 1. Open: http://localhost/phpmyadmin
echo 2. Click "New" and create database: hello_db
echo 3. Click "Import" and select: setup_database.sql
pause