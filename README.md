# WMS

![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-v3-F28D1A?style=for-the-badge&logo=laravel&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![Version](https://img.shields.io/badge/v2.0-stable-green?style=for-the-badge)

![WMS Dashboard]<img width="1899" height="1079" alt="image" src="https://github.com/user-attachments/assets/02f2b566-ca06-4523-b290-a628d93cd1b6" />



> **"Precision Inventory Control with FEFO Strategy & Real-time Analytics."**

---

## 🚀 What's New in v2.0

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

---

## ✨ Core Features

### 📦 Master Data Management
*   **SKU Management:** Detailed product profiles with dimensions, weight, and base units.
*   **Multi-Warehouse:** Manage inventory across multiple physical facilities.
*   **Partner Management:** Centralized database for Suppliers and Customers.

### 🏭 Inventory Control
*   **Batch/Lot Tracking:** Traceability for every item using Batch Codes and Expiry Dates.
*   **Stock Adjustments:** Audit-ready workflows for correcting discrepancies (Found/Lost/Damaged).
*   **Stock Transfers:** Seamless movement of stock between Bins or Warehouses.

### ⚙️ Operations
*   **Inbound (Purchase Orders):**
    *   Draft -> Confirmed -> Receiving -> Putaway.
    *   Direct assignment to specific storage Bins.
*   **Outbound (Sales Orders):**
    *   Draft -> Confirmed -> Picking -> Packing -> Shipped.
    *   Automated Pick List generation based on FEFO logic.

### 🛡 Security
*   **RBAC:** Role-Based Access Control with pre-configured roles:
    *   **Admin:** Full system control.
    *   **Warehouse Manager:** Operational oversight.
    *   **Staff:** Task execution (Scanning, Picking).

---

## 🛠 Tech Stack & Architecture

Built on a robust, modern stack designed for performance and scalability:

*   **Framework:** [Laravel 11](https://laravel.com)
*   **Admin Panel:** [FilamentPHP v3](https://filamentphp.com)
*   **Frontend:** [Livewire](https://livewire.laravel.com) & [TailwindCSS](https://tailwindcss.com)
*   **Database:** MySQL 8

**Core Data Logic:**
`Products` ↔ `Batches` ↔ `Locations` ↔ `Inventory Transactions` (The Immutable Ledger)

---

## 💻 Installation & Setup

Follow these steps to deploy WMS v2.0 locally:

### 1. Clone the Repository
```bash
git clone https://github.com/your-org/nexus-wms.git
cd nexus-wms
composer install
npm install && npm run build
```

### 2. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```
*Configure your database credentials in `.env`.*

### 3. Migration & Seeding
Initialize the database with the v2 schema and sample enterprise data:
```bash
php artisan migrate --seed --class=WMSv2Seeder
```
> **Note:** The `WMSv2Seeder` automatically generates Warehouses, Zones, Racks, Bins, and sample Inventory Transactions.

### 4. Access the System
Start the server:
```bash
php artisan serve
```
Login to the Admin Panel at `http://127.0.0.1:8000/admin`:
*   **Email:** `admin@nexus-wms.com`
*   **Password:** `password`

---

## 📸 Screenshots

| Dashboard Overview | Low Stock Alert |Customers Management |
|:------------------:|:----------------:|:----------------:|
| <img width="1904" height="1079" alt="image" src="https://github.com/user-attachments/assets/518b3388-cd26-4c1e-bfde-15352a17ed70" /> | <img width="1905" height="1079" alt="image" src="https://github.com/user-attachments/assets/1215ef43-85bf-4cd8-84ed-2f9e0c7a2001" /> | <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/666faf71-f8b9-4b32-8089-255ba58513b6" /> |

| Products Management | Order Management |
|:--------------:|:---------------:|
| <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/b1446863-8424-4fec-9c71-4c069d588bee" /> | <img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/811df683-0306-463f-9d81-66f5ba097f13" /> |

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
