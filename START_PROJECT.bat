@echo off
color 0A
title CheckNow Medical Laboratory - Complete Setup & Launch

echo.
echo  ██████╗██╗  ██╗███████╗ ██████╗██╗  ██╗███╗   ██╗ ██████╗ ██╗    ██╗
echo ██╔════╝██║  ██║██╔════╝██╔════╝██║ ██╔╝████╗  ██║██╔═══██╗██║    ██║
echo ██║     ███████║█████╗  ██║     █████╔╝ ██╔██╗ ██║██║   ██║██║ █╗ ██║
echo ██║     ██╔══██║██╔══╝  ██║     ██╔═██╗ ██║╚██╗██║██║   ██║██║███╗██║
echo ╚██████╗██║  ██║███████╗╚██████╗██║  ██╗██║ ╚████║╚██████╔╝╚███╔███╔╝
echo  ╚═════╝╚═╝  ╚═╝╚══════╝ ╚═════╝╚═╝  ╚═╝╚═╝  ╚═══╝ ╚═════╝  ╚══╝╚══╝ 
echo.
echo                    Medical Laboratory Management System
echo                           Complete Setup & Launch
echo.
echo ========================================================================

cd /d "%~dp0sachin-final-2024"

echo [1/4] Checking system requirements...
where php >nul 2>nul
if %errorlevel% neq 0 (
    echo Installing XAMPP with PHP...
    call install_dependencies.bat
)

echo [2/4] Setting up project environment...
call setup.bat

echo [3/4] Initializing database...
timeout /t 2 /nobreak > nul

echo [4/4] Launching CheckNow Medical Laboratory...
start "" "http://localhost/checknow-lab/"

echo.
echo ========================================================================
echo ✅ SUCCESS! CheckNow Medical Laboratory is now running!
echo.
echo 🌐 Website URL: http://localhost/checknow-lab/
echo 📊 Database: http://localhost/phpmyadmin/
echo ⚙️  XAMPP Panel: C:\xampp\xampp-control.exe
echo.
echo 👤 Test Login Credentials:
echo    Email: test@example.com
echo    Password: password
echo.
echo ========================================================================
echo.
pause