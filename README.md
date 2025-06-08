# 🔒 SecureVision - CCTV E-Commerce Platform

<div align="center">

![CCTV Banner](https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=300&fit=crop&crop=center)

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

**🚀 Project Based Learning - Kelompok 3**

*Membangun platform e-commerce modern untuk solusi keamanan CCTV dengan teknologi terdepan*

</div>

---

## 📋 Deskripsi Project

**SecureVision** adalah platform e-commerce yang dikhususkan untuk penjualan sistem keamanan CCTV. Project ini dikembangkan sebagai bagian dari Project Based Learning dengan fokus pada pengembangan aplikasi web yang user-friendly dan fitur lengkap untuk memenuhi kebutuhan keamanan modern.

### 🎯 Tujuan Project
- Mengembangkan platform jual-beli CCTV yang komprehensif
- Implementasi sistem manajemen produk dan paket keamanan
- Menyediakan interface yang intuitif untuk admin dan customer
- Menerapkan best practices dalam pengembangan web modern

---

## 👥 Tim Pengembang - Kelompok 3

<table align="center">
<tr>
<td align="center">
<img src="https://github.com/github.png" width="100px" alt=""/>
<br /><b>Nama Anggota 1</b>
<br />🎨 Frontend Developer
<br />📧 email1@example.com
</td>
<td align="center">
<img src="https://github.com/github.png" width="100px" alt=""/>
<br /><b>Nama Anggota 2</b>
<br />⚙️ Backend Developer
<br />📧 email2@example.com
</td>
<td align="center">
<img src="https://github.com/github.png" width="100px" alt=""/>
<br /><b>Nama Anggota 3</b>
<br />🗄️ Database Designer
<br />📧 email3@example.com
</td>
</tr>
<tr>
<td align="center">
<img src="https://github.com/github.png" width="100px" alt=""/>
<br /><b>Nama Anggota 4</b>
<br />🔧 Full Stack Developer
<br />📧 email4@example.com
</td>
<td align="center">
<img src="https://github.com/github.png" width="100px" alt=""/>
<br /><b>Nama Anggota 5</b>
<br />🎨 UI/UX Designer
<br />📧 email5@example.com
</td>
<td align="center">
<img src="https://github.com/github.png" width="100px" alt=""/>
<br /><b>Nama Anggota 6</b>
<br />📊 Project Manager
<br />📧 email6@example.com
</td>
</tr>
</table>

---

## ✨ Fitur Utama

### 🏪 **E-Commerce Core**
- 🛒 **Katalog Produk** - Tampilan produk CCTV dengan detail lengkap
- 📦 **Paket Keamanan** - Bundle produk dengan harga spesial
- 🔍 **Pencarian & Filter** - Cari produk berdasarkan kategori, harga, brand
- 💳 **Sistem Pembayaran** - Integrasi payment gateway multiple

### 👤 **Manajemen User**
- 🔐 **Autentikasi** - Login/Register dengan validasi keamanan
- 👑 **Role Management** - Admin, Customer, Staff
- 📝 **Profile Management** - Kelola informasi personal
- 📞 **Konsultasi Online** - Chat dengan ahli keamanan

### 🎛️ **Admin Dashboard**
- 📈 **Analytics** - Laporan penjualan dan statistik
- 🏷️ **Product Management** - CRUD produk dan kategori
- 📋 **Order Management** - Kelola pesanan dan status pengiriman
- 👥 **User Management** - Kelola data customer dan staff

### 🔧 **Fitur Tambahan**
- 📱 **Responsive Design** - Optimized untuk semua device
- ⚡ **Performance Optimized** - Fast loading dengan caching
- 🔒 **Security First** - Enkripsi data dan proteksi CSRF
- 📊 **SEO Friendly** - Optimized untuk search engine

---

## 🛠️ Tech Stack

### **Backend**
```
🐘 PHP 8.1+
🏗️ Laravel 10.x
🗄️ MySQL 8.0
🔧 Composer
```

### **Frontend**
```
🎨 Tailwind CSS
⚡ Alpine.js
📱 Responsive Design
🎭 Blade Templates
```

### **Tools & Environment**
```
🐳 Docker (Optional)
📦 Git Version Control
🔄 GitHub Actions (CI/CD)
📝 VS Code
```

---

## 📁 Struktur Project

```
SecureVision/
├── 📁 app/
│   ├── Http/Controllers/
│   ├── Models/
│   ├── Middleware/
│   └── Providers/
├── 📁 database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── 📁 resources/
│   ├── views/
│   ├── css/
│   └── js/
├── 📁 routes/
│   ├── web.php
│   └── api.php
├── 📁 public/
│   ├── css/
│   ├── js/
│   └── images/
└── 📄 README.md
```

---

## 🚀 Instalasi & Setup

### **Prerequisites**
```bash
PHP >= 8.1
Composer >= 2.0
Node.js >= 16.x
MySQL >= 8.0
```

### **Clone Repository**
```bash
git clone https://github.com/kelompok-3/securevision-cctv.git
cd securevision-cctv
```

### **Install Dependencies**
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### **Environment Setup**
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=securevision_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### **Database Migration**
```bash
# Run migrations
php artisan migrate

# Seed sample data
php artisan db:seed
```

### **Build Assets**
```bash
# Development
npm run dev

# Production
npm run build
```

### **Start Development Server**
```bash
php artisan serve
```

🎉 **Aplikasi berjalan di:** `http://localhost:8000`

---

## 📸 Screenshots

<div align="center">

### 🏠 **Homepage**
![Homepage](https://via.placeholder.com/800x400/4F46E5/FFFFFF?text=Homepage+Screenshot)

### 🛒 **Product Catalog**
![Product Catalog](https://via.placeholder.com/800x400/10B981/FFFFFF?text=Product+Catalog)

### 🎛️ **Admin Dashboard**
![Admin Dashboard](https://via.placeholder.com/800x400/F59E0B/FFFFFF?text=Admin+Dashboard)

</div>

---

## 📈 Progress Development

```
🏗️ Project Setup & Planning     ████████████████████ 100%
🎨 UI/UX Design                 ████████████████████ 100%
⚙️ Backend Development          ██████████████████▒▒  90%
🎭 Frontend Implementation      ████████████████▒▒▒▒  85%
🧪 Testing & Quality Assurance  ████████████▒▒▒▒▒▒▒▒  65%
🚀 Deployment & Documentation   ██████▒▒▒▒▒▒▒▒▒▒▒▒▒▒  35%
```

---

## 🎯 Roadmap

### **Phase 1: Core Development** ✅
- [x] Project initialization
- [x] Database design
- [x] Authentication system
- [x] Basic CRUD operations

### **Phase 2: Feature Implementation** 🔄
- [x] Product catalog
- [x] Shopping cart
- [ ] Payment integration
- [ ] Order management

### **Phase 3: Enhancement** 📋
- [ ] Admin dashboard analytics
- [ ] Email notifications
- [ ] Mobile app API
- [ ] Performance optimization

### **Phase 4: Deployment** 🚀
- [ ] Production deployment
- [ ] Domain & SSL setup
- [ ] Monitoring & logging
- [ ] Documentation completion

---

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage
```

---

## 📚 API Documentation

### **Base URL**
```
https://api.securevision.com/v1
```

### **Authentication**
```http
POST /api/auth/login
POST /api/auth/register
POST /api/auth/logout
```

### **Products**
```http
GET    /api/products          # Get all products
GET    /api/products/{id}     # Get specific product
POST   /api/products          # Create product (Admin)
PUT    /api/products/{id}     # Update product (Admin)
DELETE /api/products/{id}     # Delete product (Admin)
```

### **Orders**
```http
GET    /api/orders            # Get user orders
POST   /api/orders            # Create new order
GET    /api/orders/{id}       # Get specific order
```

---

## 🤝 Contributing

Kami menyambut kontribusi dari semua anggota tim! Ikuti panduan berikut:

### **Git Workflow**
```bash
# Create feature branch
git checkout -b feature/nama-fitur

# Make changes and commit
git add .
git commit -m "feat: add new feature"

# Push branch
git push origin feature/nama-fitur

# Create Pull Request
```

### **Commit Convention**
```
feat: add new feature
fix: bug fixes
docs: documentation updates
style: code formatting
refactor: code refactoring
test: add tests
chore: maintenance tasks
```

---

## 📄 License

Project ini dikembangkan untuk keperluan pembelajaran dalam program **Project Based Learning**.

```
MIT License - Educational Purpose
Copyright (c) 2024 Kelompok 3 - PBL CCTV E-Commerce
```

---

## 📞 Support & Contact

<div align="center">

**🎓 Institusi:** [Nama Institusi]  
**👨‍🏫 Pembimbing:** [Nama Dosen Pembimbing]  
**📅 Periode:** [Semester/Tahun Akademik]  

---

### **Team Contact**
📧 **Email:** kelompok3.pbl@example.com  
💬 **Discord:** [Link Discord Server]  
📱 **WhatsApp Group:** [Link WA Group]  

---

**⭐ Jangan lupa berikan star jika project ini membantu!**

*Built with ❤️ by Kelompok 3 - Project Based Learning*



---

<div align="center">

![Footer](https://capsule-render.vercel.app/api?type=waving&color=gradient&height=100&section=footer)

</div>
