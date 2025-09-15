# EventFlow

A modern event management platform built with Laravel backend and React frontend, containerized with Docker.

## 🚀 Features

- **Event Management**: Create, edit, and manage events
- **User Authentication**: Secure user registration and login
- **Responsive Design**: Modern UI that works on all devices
- **API-First**: RESTful API built with Laravel
- **Real-time Updates**: Live updates for event changes
- **Docker Support**: Easy deployment with Docker containers

## 🛠 Tech Stack

### Backend
- **Laravel 10** - PHP framework for robust API development
- **MySQL** - Database for data persistence
- **Laravel Sanctum** - API authentication
- **PHP 8.1+** - Modern PHP features

### Frontend
- **React 18** - Modern JavaScript library for UI
- **Vite** - Fast build tool and development server
- **Tailwind CSS** - Utility-first CSS framework (if used)
- **Axios** - HTTP client for API calls

### Infrastructure
- **Docker** - Containerization
- **Docker Compose** - Multi-container orchestration
- **Nginx** - Web server and reverse proxy

## 📋 Prerequisites

Before you begin, ensure you have the following installed:
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Git](https://git-scm.com/)

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/ElmehdiElkabia/eventflow.git
cd eventflow
```

### 2. Environment Setup

Create environment files for both backend and frontend:

```bash
# Backend environment
cp backend/.env.example backend/.env

# Edit the backend/.env file with your database credentials and other settings
```

### 3. Build and Run with Docker

```bash
# Build and start all services
docker-compose up --build

# Or run in detached mode
docker-compose up -d --build
```

### 4. Install Dependencies and Setup

After containers are running:

```bash
# Install Laravel dependencies
docker-compose exec backend composer install

# Generate application key
docker-compose exec backend php artisan key:generate

# Run database migrations
docker-compose exec backend php artisan migrate

# Install frontend dependencies
docker-compose exec frontend npm install
```

### 5. Access the Application

- **Frontend**: http://localhost:3000
- **Backend API**: http://localhost:8000
- **Database**: localhost:3306 (if exposed)

## 🔧 Development

### Backend Development

```bash
# Enter the backend container
docker-compose exec backend bash

# Run artisan commands
php artisan make:controller EventController
php artisan make:model Event -m
php artisan migrate

# Run tests
php artisan test
```

### Frontend Development

```bash
# Enter the frontend container
docker-compose exec frontend bash

# Start development server (if not already running)
npm run dev

# Build for production
npm run build

# Run linting
npm run lint
```

### Database Management

```bash
# Run migrations
docker-compose exec backend php artisan migrate

# Run seeders
docker-compose exec backend php artisan db:seed

# Rollback migrations
docker-compose exec backend php artisan migrate:rollback
```

## 📁 Project Structure

```
eventflow/
├── backend/                 # Laravel backend application
│   ├── app/                # Application logic
│   ├── config/             # Configuration files
│   ├── database/           # Migrations, seeders, factories
│   ├── routes/             # API and web routes
│   └── ...
├── frontend/               # React frontend application
│   ├── src/                # Source code
│   ├── public/             # Public assets
│   └── ...
├── docker/                 # Docker configuration files
│   └── nginx/              # Nginx configuration
├── docker-compose.yml      # Docker services configuration
└── README.md              # This file
```

## 🔐 Environment Variables

### Backend (.env)
```
APP_NAME=EventFlow
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=eventflow
DB_USERNAME=root
DB_PASSWORD=password
```

### Frontend
Environment variables can be added to `frontend/.env` if needed.

## 🧪 Testing

### Backend Tests
```bash
# Run all tests
docker-compose exec backend php artisan test

# Run specific test
docker-compose exec backend php artisan test --filter EventTest
```

### Frontend Tests
```bash
# Run frontend tests (if configured)
docker-compose exec frontend npm test
```

## 🚀 Deployment

### Production Build

```bash
# Build production images
docker-compose -f docker-compose.prod.yml build

# Deploy to production
docker-compose -f docker-compose.prod.yml up -d
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- **Elmehdi Elkabia** - *Initial work* - [ElmehdiElkabia](https://github.com/ElmehdiElkabia)

## 🙏 Acknowledgments

- Laravel community for the excellent framework
- React team for the amazing frontend library
- Docker for making containerization simple
- All contributors who help improve this project

## 📞 Support

If you have any questions or run into issues, please open an issue on GitHub or contact the maintainers.

---

**Happy coding! 🎉**
