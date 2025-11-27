# AidSync WMS

> A modern, real-time inventory and warehouse management solution designed for precision and scalability.

![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)
![Laravel Version](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![Filament Version](https://img.shields.io/badge/Filament-v3-F2C13E?style=flat-square&logo=livewire&logoColor=black)
![License](https://img.shields.io/badge/License-MIT-blue?style=flat-square)
![Build Status](https://img.shields.io/badge/build-passing-brightgreen?style=flat-square)

## 📖 Introduction

**AidSync WMS** is a robust Warehouse Management System built to address the complexities of modern inventory tracking. It moves beyond simple quantity counters by implementing **Batch/Lot tracking** and **Expiry Date management**, ensuring precise control over stock lifecycles.

Whether you are managing high-value electronics or perishable goods, AidSync WMS provides real-time visibility, automated low-stock alerts, and a seamless flow for inbound and outbound operations.

## ✨ Key Features

- **Product Management** ✅
  - Comprehensive details: SKU, Name, Description, Base Unit.
  - Configurable **Minimum Stock Levels** for automated alerts.

- **Inventory Control** ✅
  - **Batch & Lot Tracking:** Every item is traced back to its origin batch.
  - **Expiry Management:** First-Expired-First-Out (FEFO) readiness with visual indicators for expiring stock.
  - **Multi-Warehouse Support:** Scalable architecture for multiple storage locations.

- **Operations** ✅
  - **Inbound (Purchase Orders):** Streamlined receiving process with batch entry.
  - **Outbound (Sales Orders):** Efficient stock deduction with batch selection.
  - **Stock Adjustments:** Handle lost, damaged, or found items with audit trails.

- **Dashboard & Analytics** ✅
  - **Real-time Metrics:** Total Inventory Value, Low Stock Counts, Expiring Batches.
  - **Interactive Widgets:** Visual charts and tables powered by Filament.

## 🛠️ Tech Stack

- **Backend:** [Laravel 11](https://laravel.com)
- **Admin Panel:** [FilamentPHP v3](https://filamentphp.com)
- **Frontend Interactivity:** [Livewire 3](https://livewire.laravel.com)
- **Database:** MySQL 8.0
- **Styling:** [TailwindCSS](https://tailwindcss.com)

## 🗄️ Database Structure

The core logic revolves around strict inventory integrity:

- **Products**: The master catalog item.
- **Batches**: Specific production lots associated with a product (contains expiry dates).
- **Inventory Transactions**: The source of truth. Stock is calculated by summing `in` and `out` transactions, ensuring a complete audit trail.

## 🚀 Installation & Setup

Follow these steps to set up the project locally:

1.  **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/aidsync-wms.git
    cd aidsync-wms
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Configure your database credentials in the `.env` file.*

4.  **Database Migration & Seeding**
    ```bash
    php artisan migrate --seed
    ```
    *This will populate the database with realistic demo data (Products, Warehouses, Transactions).*

5.  **Build Assets**
    ```bash
    npm run build
    ```

6.  **Create Admin User**
    ```bash
    php artisan make:filament-user
    ```

7.  **Run the Server**
    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000/admin` to access the dashboard.

    > **Default Demo Credentials (if seeded):**
    > - **Email:** `admin@wms.com`
    > - **Password:** `password`

## 📸 Screenshots

| Dashboard Overview | Order Management |
|:------------------:|:----------------:|
| ![Dashboard](docs/dashboard.png) | ![Orders](docs/orders.png) |

| Inventory List | Low Stock Alert |
|:--------------:|:---------------:|
| ![Inventory](docs/inventory.png) | ![Alerts](docs/alerts.png) |

## 🗺️ Roadmap

- [ ] **API Integration:** REST API for external systems (ERP/eCommerce).
- [ ] **Barcode Scanner App:** Mobile companion app for scanning SKUs and Batches.
- [ ] **Advanced Reporting:** Exportable PDF/Excel reports for monthly inventory.
- [ ] **Supplier Portal:** Allow suppliers to view and update order statuses.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
