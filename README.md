# CheckNow Medical Laboratory Website

A comprehensive PHP-based medical laboratory website for blood test bookings, user registration, and online payment processing.

## 🩺 Project Overview

CheckNow is a modern medical laboratory website that allows patients to:
- Register and login to their accounts
- Book home blood collection services
- Make online payments
- Access various blood test information
- Interact with a medical chatbot
- View test reports and services

## 🛠️ Technology Stack

- **Backend**: PHP 8.2+
- **Database**: MySQL 8.0+
- **Frontend**: HTML5, CSS3, JavaScript
- **Web Server**: Apache 2.4+
- **External APIs**: Web3Forms, Font Awesome CDN, Swiper.js CDN

## 📋 Prerequisites

**System Requirements:**
- Windows 10/11, macOS 10.15+, or Linux Ubuntu 18.04+
- Minimum 4GB RAM
- 2GB free disk space
- Internet connection for CDN resources

**Required Software:**
1. **XAMPP 8.2+** (includes PHP, MySQL, Apache)
2. **Web Browser** (Chrome 90+, Firefox 88+, Safari 14+, Edge 90+)

## 🚀 ONE COMMAND TO RUN PROJECT

```bash
SOLVE_NOW.bat
```

Then create database:
1. Open http://localhost/phpmyadmin
2. Click "Import" → Select "CREATE_DATABASE.sql" → Click "Go"
3. Open http://localhost/checknow-lab/

## 📦 Installation & Setup

### Option 1: Automatic (Recommended)

```bash
SOLVE_NOW.bat
```

### Option 2: Manual Installation

**Step 1: Download and Install XAMPP**

1. Download XAMPP 8.2+ from [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. Install XAMPP on your system
3. Start Apache and MySQL services from XAMPP Control Panel

### Step 2: Database Setup

1. Open your web browser and go to `http://localhost/phpmyadmin`
2. Create a new database named `hello_db`
3. Create a table named `new_db` with the following structure:

```sql
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

### Step 3: Project Setup

1. Copy the project folder to your XAMPP htdocs directory:
   ```
   C:\xampp\htdocs\checknow-lab\
   ```

2. Ensure all project files are in the correct location:
   ```
   C:\xampp\htdocs\checknow-lab\
   ├── index.php
   ├── login.php
   ├── register.php
   ├── db.php
   ├── payment.php
   ├── home-book.php
   ├── chatbot.php
   ├── style.css
   ├── index.css
   ├── login-style.css
   ├── register-style.css
   ├── index.js
   ├── script.js
   └── [image files]
   ```

### Step 4: Database Configuration

The database configuration is already set in `db.php`:
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hello_db";
```

## 🎯 Running the Project

### 🚀 SINGLE COMMAND

```bash
SOLVE_NOW.bat
```

**Then:**
- Import `CREATE_DATABASE.sql` in phpMyAdmin
- Access: http://localhost/checknow-lab/

### Method 1: Using XAMPP (Recommended)

1. **Start XAMPP Services**:
   ```bash
   # Open XAMPP Control Panel
   C:\xampp\xampp-control.exe
   
   # Start Apache and MySQL services
   # Ensure both services show "Running" status
   ```

2. **Access the Website**:
   ```bash
   # Open in browser:
   http://localhost/checknow-lab/
   ```

### Method 2: Using PHP Built-in Server

```bash
# Navigate to project directory
cd C:\xampp\htdocs\checknow-lab

# Start PHP server
php -S localhost:8000

# Open in browser:
start http://localhost:8000
```

### Method 3: VS Code Live Server

```bash
# Install Live Server extension in VS Code
# Right-click index.php -> "Open with Live Server"
# Note: Requires PHP server for backend functionality
```

## 📁 Project Structure

```
checknow-lab/
├── 📄 index.php              # Homepage
├── 📄 login.php              # User login page
├── 📄 register.php           # User registration page
├── 📄 db.php                 # Database connection
├── 📄 payment.php            # Payment selection page
├── 📄 home-book.php          # Home blood collection booking
├── 📄 chatbot.php            # Medical chatbot interface
├── 📄 logout.php             # User logout functionality
├── 📄 Cancer.php             # Cancer test information
├── 📄 CBC.php                # Complete Blood Count info
├── 📄 Lipid-Profile.php      # Lipid profile test info
├── 📄 Hormones.php           # Hormone test information
├── 📄 [other test pages]     # Various medical test pages
├── 🎨 index.css              # Homepage styles
├── 🎨 login-style.css        # Login page styles
├── 🎨 register-style.css     # Registration page styles
├── 🎨 style.css              # Global styles
├── ⚡ index.js               # Homepage JavaScript
├── ⚡ script.js              # Global JavaScript
├── 🖼️ [image files]          # Various medical images
└── 📖 README.md              # This file
```

## 🔧 Features

### User Management
- ✅ User Registration with validation
- ✅ Secure Login/Logout system
- ✅ Password hashing for security
- ✅ Session management

### Medical Services
- ✅ Blood test information pages
- ✅ Home blood collection booking
- ✅ Multiple test categories (CBC, Lipid Profile, Hormones, etc.)
- ✅ Service information display

### Payment System
- ✅ Multiple payment options (VISA, Mastercard, PayPal, AMEX)
- ✅ Payment selection interface
- ✅ Secure payment processing

### Interactive Features
- ✅ Medical chatbot for queries
- ✅ Contact forms with Web3Forms integration
- ✅ Responsive design for mobile devices
- ✅ Image sliders and galleries

## 🌐 External Dependencies

### CDN Resources (Already Included)
- **Font Awesome**: `https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css`
- **Swiper.js**: `https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css`
- **Web3Forms API**: `https://api.web3forms.com/submit`

## 🔒 Security Features

- Password hashing using PHP's `password_hash()`
- SQL injection prevention (basic)
- Session-based authentication
- Form validation (client and server-side)

## 📱 Browser Compatibility

- ✅ Chrome 70+
- ✅ Firefox 65+
- ✅ Safari 12+
- ✅ Edge 79+
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🐛 Troubleshooting

### Common Issues:

1. **Database Connection Error**:
   - Ensure MySQL is running in XAMPP
   - Check database name and credentials in `db.php`
   - Verify database `hello_db` exists

2. **Images Not Loading**:
   - Check image file paths
   - Ensure images are in the correct directory
   - Verify file permissions

3. **PHP Errors**:
   - Enable error reporting in PHP
   - Check Apache error logs in XAMPP

4. **Session Issues**:
   - Clear browser cookies
   - Restart Apache server
   - Check session configuration

## 📞 Support

For technical support or questions:
- **Email**: Contact through the website form
- **Phone**: +91 9988776655
- **Hours**: 7:30 AM to 10:30 PM

## 👥 Credits

**Developed by**: Aukur  Mishra 
**Year**: 2026 
**Institution**: College Project

## 📄 License

This project is created for educational purposes as a college project.

---

**Note**: This is a demonstration project for educational purposes. For production use, additional security measures and optimizations should be implemented.
