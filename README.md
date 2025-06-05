# EventFlow

EventFlow is a modern, full-stack event management platform designed for organizers, attendees, and admins. It streamlines event creation, booking, QR-based check-ins, and analytics — all in one responsive and scalable app.

---

## 🎯 Features

- **Role-Based Access:** Admin, Organizer, and Attendee dashboards and permissions.
- **Event Management:** Create, edit, publish, and manage events with an interactive calendar.
- **Booking & Ticketing:** Attendees book events, receive digital tickets, and QR codes for check-in.
- **Real-Time Updates:** Instant notifications for bookings, check-ins, and event status.
- **QR Code Check-In:** Fast, paperless attendee check-in and attendance tracking.
- **Analytics Dashboards:** Real-time statistics and performance insights.

---

## 🛠️ Tech Stack

- **Frontend:** React, Tailwind CSS, shadcn/ui, Radix UI, Framer Motion, Lucide Icons
- **Backend:** Laravel (PHP), Laravel Sanctum, Laravel Echo + Pusher, simple-qrcode
- **Database:** MySQL
- **Dev Tools:** Composer, npm

---

## 🚀 Getting Started (No Docker)

### Prerequisites

- PHP >= 8.1, Composer
- Node.js & npm
- MySQL Server

### 1. Clone the repository

```bash
git clone https://github.com/ELmehdiElkabia/eventflow.git
cd eventflow
```

### 2. Setup the Backend

```bash
cd backend
composer install
cp .env.example .env
# Edit .env and set your MySQL credentials
php artisan key:generate
php artisan migrate --seed
npm install            # Only if you want to build Laravel frontend assets
npm run dev            # Only if you want to build Laravel frontend assets
php artisan serve
```

The backend API is now available at [http://localhost:8000](http://localhost:8000).

### 3. Setup the Frontend

```bash
cd ../frontend
npm install
# If needed, edit .env or API config to use http://localhost:8000/api
npm start
```

The React frontend runs at [http://localhost:3000](http://localhost:3000).

### 4. Setup MySQL Database

- Create a database named `eventflow`.
- Use your preferred MySQL tool or run in SQL:
  ```sql
  CREATE DATABASE eventflow CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
  ```
- Ensure your Laravel `.env` file points to this database.

---

## 📝 Usage

- **Admins/Organizers:** Login to manage events, bookings, and view analytics.
- **Attendees:** Register, book events, download tickets, and check in with QR codes.

---

## 🛡️ Tips & Best Practices

- Keep `.env` files secure and **never** commit real secrets to Git.
- For production, use Nginx/Apache and HTTPS.
- Regularly run backend (`php artisan test`) and frontend (`npm test`) tests.
- Use `.env` files in both frontend and backend for configuration.

---

## 🤝 Contributing

Pull requests are welcome! Please open an issue to discuss major changes first.

---

## 📄 License

MIT

---

## 📬 Support

Open an issue or discussion on [GitHub](https://github.com/ELmehdiElkabia/eventflow/issues) for help, feedback, or feature requests.
