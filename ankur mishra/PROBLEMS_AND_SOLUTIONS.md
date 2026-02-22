# Problems Preventing Project from Running & Solutions

## ✅ Current Status Check

**XAMPP:** ✅ Installed at `C:\xampp\`
**Project Files:** ✅ Copied to `C:\xampp\htdocs\checknow-lab\`
**Database Config:** ✅ `db.php` exists

## ❌ Problems Found

### Problem 1: PHP Not in System PATH
**Issue:** PHP command not accessible from command line
**Solution:**
```bash
# Add PHP to system PATH:
# 1. Open System Properties > Environment Variables
# 2. Add to PATH: C:\xampp\php
# OR run directly:
C:\xampp\php\php.exe -S localhost:8000
```

### Problem 2: XAMPP Services Not Started
**Issue:** Apache and MySQL services are not running
**Solution:**
```bash
# Start XAMPP Control Panel:
C:\xampp\xampp-control.exe

# Click "Start" buttons for:
# - Apache (Web Server)
# - MySQL (Database)
```

### Problem 3: Database Not Created
**Issue:** Database `hello_db` doesn't exist yet
**Solution:**
```bash
# 1. Start MySQL in XAMPP
# 2. Open: http://localhost/phpmyadmin
# 3. Import file: setup_database.sql
# OR create manually:
CREATE DATABASE hello_db;
```

### Problem 4: Port Conflicts
**Issue:** Port 80 or 3306 already in use
**Solution:**
```bash
# Check ports:
netstat -ano | findstr :80
netstat -ano | findstr :3306

# Change Apache port in:
C:\xampp\apache\conf\httpd.conf
# Change: Listen 80 to Listen 8080

# Change MySQL port in:
C:\xampp\mysql\bin\my.ini
# Change: port=3306 to port=3307
```

## 🚀 Step-by-Step Fix

### Step 1: Start XAMPP Services
```bash
# Run XAMPP Control Panel
C:\xampp\xampp-control.exe

# Start Apache and MySQL
# Wait until both show "Running" in green
```

### Step 2: Create Database
```bash
# Open phpMyAdmin
start http://localhost/phpmyadmin

# Run this SQL:
CREATE DATABASE hello_db;
USE hello_db;
CREATE TABLE new_db (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Step 3: Access Website
```bash
# Open in browser:
start http://localhost/checknow-lab/
```

## 🔧 Quick Fix Commands

```bash
# Complete fix in 3 commands:
C:\xampp\xampp-control.exe
start http://localhost/phpmyadmin
start http://localhost/checknow-lab/
```

## 📋 Verification Checklist

- [ ] XAMPP installed at C:\xampp\
- [ ] Apache service running (green in XAMPP)
- [ ] MySQL service running (green in XAMPP)
- [ ] Database `hello_db` created
- [ ] Table `new_db` exists
- [ ] Project files in C:\xampp\htdocs\checknow-lab\
- [ ] Can access http://localhost/checknow-lab/
- [ ] Can access http://localhost/phpmyadmin

## 🐛 Common Errors & Fixes

**Error: "Connection failed"**
- Fix: Start MySQL in XAMPP Control Panel

**Error: "Table 'hello_db.new_db' doesn't exist"**
- Fix: Import setup_database.sql in phpMyAdmin

**Error: "Port 80 in use"**
- Fix: Stop IIS or change Apache port to 8080

**Error: "Access forbidden"**
- Fix: Check file permissions in htdocs folder

**Error: "PHP file downloads instead of running"**
- Fix: Restart Apache service in XAMPP

## ✅ Working Configuration

```
XAMPP Location: C:\xampp\
Project Location: C:\xampp\htdocs\checknow-lab\
Website URL: http://localhost/checknow-lab/
Database URL: http://localhost/phpmyadmin
Database Name: hello_db
Table Name: new_db
```
