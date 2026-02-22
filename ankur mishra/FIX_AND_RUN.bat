@echo off
title Fix and Run CheckNow Lab
color 0E

echo ========================================
echo  FIXING AND RUNNING CHECKNOW LAB
echo ========================================
echo.

echo [Step 1/4] Starting XAMPP Control Panel...
start "" "C:\xampp\xampp-control.exe"
echo Please start Apache and MySQL services manually
echo.
timeout /t 5

echo [Step 2/4] Opening phpMyAdmin for database setup...
echo Please create database 'hello_db' if not exists
start "" "http://localhost/phpmyadmin"
echo.
timeout /t 3

echo [Step 3/4] Waiting for services to start...
timeout /t 5

echo [Step 4/4] Opening CheckNow Lab website...
start "" "http://localhost/checknow-lab/"
echo.

echo ========================================
echo MANUAL STEPS REQUIRED:
echo ========================================
echo 1. In XAMPP Control Panel:
echo    - Click START for Apache
echo    - Click START for MySQL
echo.
echo 2. In phpMyAdmin:
echo    - Create database: hello_db
echo    - Import: setup_database.sql
echo.
echo 3. Access website:
echo    http://localhost/checknow-lab/
echo ========================================
echo.
pause