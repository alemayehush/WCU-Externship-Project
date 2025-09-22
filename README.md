## 🏢 WCU Digital Office Accessory Maintenance Service Management System
![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue?logo=php)
![SQLite](https://img.shields.io/badge/SQLite-Supported-green?logo=sqlite)
![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)
![Status](https://img.shields.io/badge/Status-In_Development-orange)

A full-stack PHP system built for **Wachemo University** to manage **office accessory maintenance requests**.  
The system provides role-based dashboards for **Staff**, **Technicians**, **Administrators**, and **Auditors/Managers** — ensuring efficient reporting, tracking, repairing, and auditing of all university accessories (computers, chairs, printers, projectors, etc.).

---

## ✨ Features

### 👨‍💼 Staff (Requesters)
- Report problems with office accessories (with optional photo upload).
- Track request status (Pending → In Progress → Completed).
- Cancel requests before assignment.
- Notifications when requests are updated.

### 🔧 Technicians
- View unassigned and assigned requests.
- Accept jobs, update statuses (In Progress / Completed).
- Add repair notes and upload after-fix photos.
- Record spare parts used.

### 🛠 Administrators
- Monitor all requests with dashboard stats & charts.
- Assign technicians to maintenance tasks.
- Approve or reject maintenance costs.
- Configure accessory categories, users, and roles.

### 📊 Auditors / Managers
- Generate and export reports (PDF/Excel).
- Review maintenance logs and performance.
- Track cost analysis over time.

---

## 📂 Project Structure

├── index.php # Entry point (role-based routing)

├── staff/ # Staff module

├── technician/ # Technician module

├── admin/ # Admin module

├── auditor/ # Auditor module

├── assets/ # CSS, JavaScript, images

├── uploads/ # Uploaded issue photos

├── wcu_maintenance.db # SQLite database (auto-created)

└── README.md # Documentation

---

## ⚡ Requirements

- PHP **7.4+** with `PDO SQLite` enabled  
- A PHP-capable web server (Apache, Nginx, or PHP built-in server)  
- Write permissions for `uploads/` and database files  

---

## 🚀 Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/your-org/wcu-maintenance-system.git
   cd wcu-maintenance-system
2. Start a PHP development server:
   php -S localhost:8000
3. Open your browser:
   http://localhost:8000/index.php
4. The database (wcu_maintenance.db) and uploads/ folder will be auto-created.

---
## 🛠 Usage Workflow

1. **Staff →** submits a maintenance request.
2. **Admin →** reviews and assigns technician.
3. **Technician →** repairs, updates status, adds notes/photos.
4. **Admin →** approves/rejects maintenance cost.
5. **Staff →** sees final status (Closed).
6. **Auditor →** generates reports and audits logs.
---
## 🔒 Security Notes

⚠️ This demo build has no authentication system.
For production deployment:

- Add login/SSO integration for staff & admins.

- Use CSRF protection and input sanitization.

- Validate and restrict file uploads.

- Enforce strict role-based permissions.

---
## 📈 Future Improvements

- Preventive maintenance scheduling.

- Email/SMS notifications.

- Mobile app (Android/iOS) integration.

- Multi-language support (English & Amharic).

- Dockerized deployment for easy setup.

---
## 📊 System Architecture
[ Staff ]        [ Technicians ]        [ Admin ]        [ Auditor ]
    |                 |                     |                |
    +------> Web/Mobile App (PHP/JS Frontend) <--------------+
                        |
                Application Server (PHP APIs, Validation)
                        |
                SQLite/MySQL Database (Assets, Requests, Logs)
                        |
                Notification Service (Email/SMS)

---
## 📝 License
This project is licensed under the MIT License.

---
## 👨‍💻 Authors

Developed for Wachemo University by WCU externship group members:
1. Alemayehu Sh.
2. Fikerab L.
3. Mesay A.
4. Feyisa K.
5. Senedu G.
6. Eden G.
7. Agegnehu A.
8. Petros H.
 
