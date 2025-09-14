# Buhimba United Saints FC - Official Website

A professional football club website built with Laravel, Bootstrap 5, and MySQL for Buhimba United Saints FC, a Uganda Premier League (UPL) team.

## 🏆 Features

### Public Website
- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **Club Branding**: Green and white color scheme matching club identity
- **Home Page**: Hero banner, latest news, match information, and sponsor showcase
- **SEO Optimized**: Meta tags, Open Graph, and Twitter Cards for social sharing
- **Fast Loading**: Optimized for Ugandan internet speeds

### Admin Dashboard (Planned)
- **Role-based Access**: Admin, Media Officer, Editor roles
- **Content Management**: Players, staff, fixtures, results, news, sponsors
- **WYSIWYG Editor**: Rich text editing for articles and match reports
- **File Management**: Image and document upload system
- **Analytics Dashboard**: Basic site traffic and content statistics

## 🛠️ Technology Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Bootstrap 5 + Blade templates
- **Database**: MySQL/SQLite
- **Authentication**: Laravel Breeze
- **Styling**: SCSS with custom club branding
- **Build Tools**: Vite for asset compilation
- **Icons**: Bootstrap Icons



## 🎨 Design System

### Colors
- **Primary Green**: `#2d5016` (Club Green)
- **Secondary Green**: `#4a7c59` (Light Green)
- **White**: `#ffffff`

### Typography
- **Font Family**: Inter (Google Fonts)
- **Weights**: 300, 400, 500, 600, 700, 800, 900

### Components
- Custom Bootstrap theme with club colors
- Responsive navigation with dropdown menus
- Card-based layouts for content display
- Social media integration placeholders

## 🔐 Authentication & Security

- **Laravel Breeze**: Simple authentication scaffolding
- **CSRF Protection**: All forms protected
- **Password Hashing**: Secure password storage
- **Prepared Statements**: Protection against SQL injection
- **Role-based Access**: Different permission levels

### Default Admin Accounts
- **Admin**: admin@buhimbasaints.com / password
- **Media Officer**: media@buhimbasaints.com / password

## 📱 Responsive Features

- Mobile-first design approach
- Collapsible navigation menu
- Optimized images and assets
- Touch-friendly interface elements
- Fast loading on slower connections

## 🔧 Development

### File Structure
```
app/
├── Http/Controllers/
│   ├── Admin/           # Admin panel controllers
│   └── HomeController.php
├── Models/              # Eloquent models
resources/
├── sass/
│   └── app.scss        # Custom styling with Bootstrap
├── js/
│   └── app.js          # JavaScript functionality
└── views/
    ├── layouts/
    │   ├── app.blade.php      # Admin layout
    │   └── public.blade.php   # Public website layout
    └── home.blade.php         # Homepage
```

