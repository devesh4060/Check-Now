@echo off
echo ========================================
echo CheckNow Medical Laboratory Setup
echo ========================================
echo.

echo Checking if XAMPP is installed...
if exist "C:\xampp\xampp-control.exe" (
    echo XAMPP found at C:\xampp\
) else (
    echo XAMPP not found! Please install XAMPP first.
    echo Download from: https://www.apachefriends.org/
    pause
    exit /b 1
)

echo.
echo Starting XAMPP services...
echo Please start Apache and MySQL from XAMPP Control Panel
echo.

echo Opening XAMPP Control Panel...
start "" "C:\xampp\xampp-control.exe"

echo.
echo Waiting for services to start...
timeout /t 10 /nobreak

echo.
echo Opening phpMyAdmin for database setup...
echo Please run the setup_database.sql script in phpMyAdmin
start "" "http://localhost/phpmyadmin"

echo.
echo Copying project files to htdocs...
set "source=%~dp0"
set "destination=C:\xampp\htdocs\checknow-lab\"

if not exist "%destination%" mkdir "%destination%"

echo Copying files...
xcopy "%source%*" "%destination%" /E /H /C /I /Y

echo.
echo ========================================
echo Setup Instructions:
echo ========================================
echo 1. Make sure Apache and MySQL are running in XAMPP
echo 2. Import setup_database.sql in phpMyAdmin
echo 3. Open http://localhost/checknow-lab/ in your browser
echo.
echo Project is ready to run!
echo ========================================

pause