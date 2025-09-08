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

## 🚀 Quick Start

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & npm
- MySQL/SQLite database

### Installation

1. **Install PHP dependencies**
   ```bash
   composer install
   ```

2. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   - Configure your database settings in `.env`
   - Run migrations and seed data:
   ```bash
   php artisan migrate --seed
   ```

5. **Build frontend assets**
   ```bash
   npm run build
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

Visit `http://127.0.0.1:8000` to view the website.

## 📊 Database Schema

### Core Tables
- **users**: Admin users with role-based access
- **roles**: User role definitions (Admin, Editor, Media Officer)
- **players**: Player profiles with statistics and personal information
- **staff**: Coaching and support staff profiles
- **fixtures**: Upcoming match schedule
- **matches**: Match results with detailed statistics
- **news**: Articles and club announcements
- **sponsors**: Partner and sponsor information
- **league_table**: Current league standings

### Sample Data
The project includes seeders with realistic sample data:
- 11 players across all positions with statistics
- 8 sponsors including major Ugandan companies
- Admin user accounts for testing

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

### Building Assets
```bash
# Development
npm run dev

# Production
npm run build

# Watch for changes
npm run dev -- --watch
```

### Database Operations
```bash
# Fresh migration with seed data
php artisan migrate:fresh --seed

# Run specific seeder
php artisan db:seed --class=PlayerSeeder
```

## 🌐 Deployment (Hostinger Ready)

### Production Setup
1. Upload files to public_html
2. Configure database credentials
3. Set `APP_ENV=production` in .env
4. Run production build: `npm run build`
5. Configure SSL certificate
6. Set up HTTPS redirect

### Environment Configuration
```env
APP_NAME="Buhimba United Saints FC"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📋 Roadmap

### Phase 1 (Current)
- [x] Laravel project setup
- [x] Bootstrap 5 integration
- [x] Database schema design
- [x] Home page with sample data
- [x] Basic navigation structure

### Phase 2 (Next Steps)
- [ ] Complete CRUD operations for admin panel
- [ ] Player and staff management pages
- [ ] Fixtures and results management
- [ ] News and media system
- [ ] Image upload functionality

### Phase 3 (Future)
- [ ] Advanced analytics dashboard
- [ ] Social media integration
- [ ] Newsletter system
- [ ] Mobile app API
- [ ] Multi-language support

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests and ensure code quality
5. Submit a pull request

## 📄 License

This project is proprietary software developed for Buhimba United Saints FC.

## 📞 Support

For technical support or questions:
- **Email**: dev@buhimbasaints.com
- **Documentation**: This README file
- **Issues**: Contact the development team

---

**Buhimba United Saints FC** - Competing with pride in the Uganda Premier League 🇺🇬⚽

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
