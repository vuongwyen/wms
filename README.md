<<<<<<< HEAD
# WMS | Enterprise Resource Planning
=======
# WMS
>>>>>>> 84df0f292b556b160b1133484bbb58a643d8a050

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-v3-F28D1A?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![Build](https://img.shields.io/badge/Build-Passing-green?style=for-the-badge)

<<<<<<< HEAD
![WMS Dashboard](docs/images/dashboard-main.png)
=======
![WMS Dashboard]<img width="1899" height="1079" alt="image" src="https://github.com/user-attachments/assets/02f2b566-ca06-4523-b290-a628d93cd1b6" />


>>>>>>> 84df0f292b556b160b1133484bbb58a643d8a050

> **"An industrial-grade inventory management solution designed for precision, speed, and scalability. Built with the TALL stack."**

---

## 💡 Why WMS?

<<<<<<< HEAD
Managing inventory with spreadsheets or legacy software leads to errors, waste, and lost revenue. **WMS** transforms your supply chain operations by providing a single source of truth. It replaces guesswork with real-time tracking, minimizes waste through intelligent **FEFO (First Expired, First Out)** strategies, and scales effortlessly from a single warehouse to a multi-facility enterprise.
=======
WMS v2.0 Enterprise Edition introduces industrial-grade features designed for high-volume warehouses:

*   **🏗 Advanced Location Management:**
    *   Full hierarchical storage support: **Warehouse -> Zone -> Rack -> Bin**.
    *   Precise inventory tracking down to the specific bin level.
*   **🧠 Smart Picking (FEFO Strategy):**
    *   **First Expired, First Out:** The system automatically suggests batches with the earliest expiry dates during picking to minimize waste.
*   **📟 Barcode Integration:**
    *   Built-in barcode generation for Products and Locations.
    *   Scan-to-Receive and Scan-to-Pick workflows.
*   **📊 Real-time Analytics:**
    *   Live dashboards showing Inventory Turnover Ratio, Stock Movement, and Low Stock Alerts.
>>>>>>> 84df0f292b556b160b1133484bbb58a643d8a050

---

## ✨ Key Features

### 📦 Precision Inventory
*   **Granular Location Management:** Move beyond simple stock counts. Track items down to the specific **Zone, Rack, and Bin**.
*   **Batch & Lot Tracking:** Complete traceability for every item, including production batches and expiry dates.
*   **Smart Strategies:** Automated **FEFO** picking logic ensures the oldest stock is used first, significantly reducing spoilage and waste.

### 🚀 Operations & Automation
*   **Barcode Integration:** Built-in tools to generate, print, and scan barcodes for products and locations, streamlining workflows.
*   **Streamlined Flows:**
    *   **Inbound:** Efficient Purchase Order management with direct Putaway to bins.
    *   **Outbound:** Automated Pick List generation for Sales Orders.
*   **Stock Control:** Comprehensive tools for Stock Adjustments, Transfers, and Audits.

### 📊 Intelligence & Reporting
*   **Real-time Analytics:** Live dashboards featuring Inventory Turnover, Stock Valuation, and Low Stock Alerts.
*   **Immutable Audit Trail:** Every movement is recorded in the `inventory_transactions` ledger, ensuring complete accountability.

---

## 🛠 Technology Stack

WMS is built on a modern, robust architecture designed for performance and maintainability:

*   **Backend:** [Laravel 11](https://laravel.com) - The PHP framework for web artisans.
*   **Admin Panel:** [FilamentPHP v3](https://filamentphp.com) - A collection of beautiful, full-stack components.
*   **Frontend:** [Livewire 3](https://livewire.laravel.com) + [Alpine.js](https://alpinejs.dev) - Dynamic interfaces without the complexity of an SPA.
*   **Database:** MySQL 8.0 - Optimized schema for high-volume transactions.
*   **Styling:** [TailwindCSS](https://tailwindcss.com) - Utility-first CSS framework.

---

## 💻 Getting Started

<<<<<<< HEAD
Follow these steps to deploy WMS locally for development or testing.
=======
Follow these steps to deploy WMS v2.0 locally:
>>>>>>> 84df0f292b556b160b1133484bbb58a643d8a050

### Prerequisites
*   PHP 8.2+
*   Composer
*   Node.js & NPM
*   MySQL 8.0+

### Installation

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/your-org/wms.git
    cd wms
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install && npm run build
    ```

3.  **Environment Setup**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Edit `.env` and configure your database connection details.*

4.  **Database Setup**
    Run the migrations and seed the database with enterprise sample data (Warehouses, Locations, Products, Users):
    ```bash
    php artisan migrate --seed
    ```

5.  **Access the System**
    Start the local development server:
    ```bash
    php artisan serve
    ```
    Visit `http://127.0.0.1:8000/admin` and log in:
    *   **Email:** `admin@wms.com`
    *   **Password:** `password`

---

<<<<<<< HEAD
## 🏗 Database Architecture

WMS uses a relational model optimized for data integrity:

> **Products** are the core entity, linked to specific **Batches** (for expiry/lot tracking).
> **Warehouses** contain a hierarchy of **Locations** (Zones -> Racks -> Bins).
> **Inventory Transactions** act as the central ledger, linking Products, Batches, and Locations to record every single stock movement (In/Out).
=======
## 📸 Screenshots

| Dashboard Overview | Low Stock Alert |Customers Management |
|:------------------:|:----------------:|:----------------:|
| <img width="1904" height="1079" alt="image" src="https://github.com/user-attachments/assets/518b3388-cd26-4c1e-bfde-15352a17ed70" /> | <img width="1905" height="1079" alt="image" src="https://github.com/user-attachments/assets/1215ef43-85bf-4cd8-84ed-2f9e0c7a2001" /> | <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/666faf71-f8b9-4b32-8089-255ba58513b6" /> |
>>>>>>> 84df0f292b556b160b1133484bbb58a643d8a050

| Products Management | Order Management |
|:--------------:|:---------------:|
| <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/b1446863-8424-4fec-9c71-4c069d588bee" /> | <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/811df683-0306-463f-9d81-66f5ba097f13" /> |

<<<<<<< HEAD
## 🤝 Contributing

We welcome contributions! Please see our [CONTRIBUTING.md](CONTRIBUTING.md) for details on how to submit pull requests, report issues, and suggest improvements.

## 📄 License

WMS is open-sourced software licensed under the [MIT license](LICENSE).
=======
| Suppliers Management | Warehouses Management |
|:--------------:|:---------------:|
| <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/9d7e3939-f5f7-4bf6-bccc-e07e5464167a" /> | <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/652267d2-b5af-4bc9-9709-5479604a303d" /> |

## 🗺️ Roadmap

- [ ] **API Integration:** REST API for external systems (ERP/eCommerce).
- [ ] **Barcode Scanner App:** Mobile companion app for scanning SKUs and Batches.
- [ ] **Advanced Reporting:** Exportable PDF/Excel reports for monthly inventory.
- [ ] **Supplier Portal:** Allow suppliers to view and update order statuses.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 84df0f292b556b160b1133484bbb58a643d8a050
