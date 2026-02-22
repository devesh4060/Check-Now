@echo off
echo ========================================
echo CheckNow Lab - Dependency Installer
echo ========================================

echo Downloading XAMPP...
powershell -Command "Invoke-WebRequest -Uri 'https://sourceforge.net/projects/xampp/files/XAMPP%%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download' -OutFile 'xampp-installer.exe'"

echo Installing XAMPP...
start /wait xampp-installer.exe

echo Setup complete! Run setup.bat next.
pause