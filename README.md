# IHM MonDomiService Project

Welcome to the IHM MonDomiService project! This project aims to provide users with on-demand MonDomiService.

## Project Description

The IHM MonDomiService project is built using Laravel and Blade templating engine. It allows users to browse various service categories, select specific services, and book them for their home. The project provides a user-friendly interface to view service details, make bookings, and manage user accounts.

## Project Features

- Browse service categories and subcategories
- View service details, pricing, and availability
- Book services for a specific date and time
- User registration and authentication
- User profile management
- Service provider management (admin functionality)
- Payment integration (optional)

## Installation

Follow these steps to install the project locally on your machine:

### Prerequisites

- PHP (>=7.4) installed
- Composer installed
- MySQL (or any other supported database) installed

### Step 1: Clone the repository

```git clone https://github.com/Ftayri/ihm-project.git```

### Step 2: Install dependencies

```composer install```

### Step 3: Configure environment

Create a copy of the `.env.example` file and rename it to `.env`. Modify the `.env` file with your database credentials and any other necessary configurations.

```cp .env.example .env```

### Step 4: Generate application key

```php artisan key:generate```

### Step 5: Run migrations and seed the database

```php artisan migrate --seed```

This will create the necessary database tables and seed them with sample data.

### Step 6: Start the development server

```php artisan serve```

The project should now be accessible at `http://localhost:8000`.

## Contributing

Contributions to the IHM MonDomiService project are welcome! If you find any issues or have suggestions for improvements, please submit a pull request or open an issue.

