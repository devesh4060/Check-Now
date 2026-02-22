@echo off
title CheckNow Medical Laboratory
echo ========================================
echo   CheckNow Medical Laboratory
echo   Starting Application...
echo ========================================

:: Check if XAMPP is installed
if not exist "C:\xampp\xampp-control.exe" (
    echo XAMPP not found! Installing dependencies...
    call install_dependencies.bat
)

:: Start XAMPP services
echo Starting XAMPP services...
start "" "C:\xampp\xampp-control.exe"

:: Wait for services to start
echo Waiting for services to initialize...
timeout /t 5 /nobreak > nul

:: Check if project is in htdocs
if not exist "C:\xampp\htdocs\checknow-lab\" (
    echo Setting up project files...
    call setup.bat
)

:: Open website in default browser
echo Opening CheckNow Medical Laboratory...
timeout /t 3 /nobreak > nul
start "" "http://localhost/checknow-lab/"

echo.
echo ========================================
echo Application started successfully!
echo URL: http://localhost/checknow-lab/
echo ========================================
echo.
echo Press any key to open XAMPP Control Panel...
pause > nul
start "" "C:\xampp\xampp-control.exe"