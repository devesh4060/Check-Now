# 🚀 Quick Start Guide - CheckNow Medical Laboratory

## ⚡ Fast Setup (5 Minutes)

### Step 1: Install XAMPP
```bash
# Download and install XAMPP from:
https://www.apachefriends.org/download.html
```

### Step 2: Run Setup Script
```bash
# Double-click setup.bat (Windows)
# Or run manually:
setup.bat
```

### Step 3: Database Setup
1. Open phpMyAdmin: `http://localhost/phpmyadmin`
2. Import `setup_database.sql`
3. Database `hello_db` will be created automatically

### Step 4: Access Website
```bash
# Open in browser:
http://localhost/checknow-lab/
```

## 🎯 Quick Commands

### Start Project (XAMPP)
```bash
# Start XAMPP Control Panel
C:\xampp\xampp-control.exe

# Start Apache and MySQL services
# Then open: http://localhost/checknow-lab/
```

### Start Project (PHP Built-in Server)
```bash
cd C:\xampp\htdocs\checknow-lab
php -S localhost:8000
# Open: http://localhost:8000
```

## 🔑 Default Login Credentials

**Test User:**
- Email: `test@example.com`
- Password: `password`

**Admin User:**
- Email: `admin@checknow.com`  
- Password: `password`

## 📋 Quick Test Checklist

- [ ] XAMPP installed and running
- [ ] Apache service started (green in XAMPP)
- [ ] MySQL service started (green in XAMPP)
- [ ] Database `hello_db` created
- [ ] Website loads at `http://localhost/checknow-lab/`
- [ ] Registration works
- [ ] Login works
- [ ] Home booking form works
- [ ] Payment page loads
- [ ] Chatbot responds

## 🛠️ Troubleshooting

**Port 80 already in use:**
```bash
# Change Apache port in XAMPP config
# Or stop other web servers (IIS, Skype)
```

**MySQL won't start:**
```bash
# Change MySQL port from 3306 to 3307
# Update db.php with new port
```

**Database connection error:**
```bash
# Check MySQL is running
# Verify database name in db.php
# Import setup_database.sql again
```

## 📱 Mobile Testing
```bash
# Find your local IP address
ipconfig

# Access from mobile:
http://[YOUR_IP]:80/checknow-lab/
# Example: http://192.168.1.100/checknow-lab/
```

## 🎨 Customization

**Change site name:**
- Edit `index.php` - Update "CheckNow" text
- Edit CSS files for styling

**Add new test pages:**
- Copy existing test page (e.g., `CBC.php`)
- Update content and images
- Add link in navigation

**Modify database:**
- Edit `setup_database.sql`
- Re-import in phpMyAdmin

## 📞 Need Help?

1. Check `README.md` for detailed instructions
2. Review `requirements.txt` for system requirements
3. Verify all files are in correct locations
4. Ensure XAMPP services are running

---
**Ready to go!** 🎉 Your medical laboratory website should now be running successfully.
