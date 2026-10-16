@"
# TTTM2113 Web Development - Project Tutorial 1 (PT1)

**Developer:** Khan Khai Qian  
**Matric Number:** A219558  
**Faculty:** Faculty of Information Science and Technology (FTSM), Universiti Kebangsaan Malaysia  
**Theme:** AeroCrisp Store (Air Fryer & Smart Kitchen Appliance Management System)  
**Live LRGS URL:** http://lrgs.ftsm.ukm.my/users/a219558/pt1/home.php  

---

## Project Overview
This repository contains the deliverables for **Project Tutorial 1 (PT1)** for the course **TTTM2113 Web Development**. PT1 focuses on architecting the foundational presentation layer, static layouts, and mock CRUD views using **HTML5**, **CSS3**, and **Bootstrap 5.3**, utilizing PHP output buffering (\`ob_start()\`) for template consistency.

## Complete File & Module Architecture (11 Files)

### 1. Structural Layout & Templating Engine (4 Files)
* **`header.php`**: Document head skeleton containing HTML5 metadata, CDN links for Bootstrap 5.3 CSS, and Bootstrap Icons 1.13.1. Opens the fluid grid container.
* **`sidebar.php`**: Collapsible, responsive vertical navigation bar containing active hyperlinks to all system modules and user profile dropdown.
* **`layout.php`**: Master layout wrapper assembling `header.php`, `sidebar.php`, the mobile-view offcanvas burger header (`#myBurger`), and the buffered page content (`$content`).
* **`footer.php`**: Closes container wrappers and loads the Bootstrap 5.3 JavaScript bundle (`bootstrap.bundle.min.js`) for dropdown and offcanvas interactions.

### 2. Functional Application Views (7 Files)
* **`home.php` (Dashboard)**: Central landing page featuring the hero showcase banner, catalog overview metrics, and quick navigation shortcuts.
* **`products.php` (Product Management)**: Form and table interface for product records. Implements custom air fryer attributes: **Capacity (L)** and **Control Type** (replacing condition and manufacturing year).
* **`customers.php` (Customer Management)**: Customer registration module tracking customer ID, full name, gender, phone contact, and registration date.
* **`staffs.php` (Staff Management)**: Internal personnel registry managing staff IDs, full names, phone numbers, and company email addresses.
* **`orders.php` (Order Processing)**: Primary order transaction registry linking orders to respective customer and staff identifiers, featuring navigation links to item details and invoices.
* **`orderdetails.php` (Order Line Items)**: Transaction management view for individual orders containing order summary metadata, an "Add Product" form, and line-item calculation tables.
* **`invoice.php` (Sales Invoice)**: Formatted commercial invoice featuring customer/staff transaction details, subtotal summaries, and custom `@media print` rules to strip interface navigation during printing.

### 3. Media Assets
* **`images/`**: Product image repository housing 20 air fryer catalog image files (`P001.jpg` – `P020.jpg`).

## Tech Stack & Dependencies
- **Styling Framework:** Bootstrap 5.3.0-alpha3
- **Icon Set:** Bootstrap Icons 1.13.1
- **Server Environment:** Apache (Laragon) / Linux (LRGS UKM)
- **Templating:** PHP Output Buffering Architecture
"@ | Out-File -FilePath README.md -Encoding utf8

git add README.md
git commit -m "docs: add comprehensive project readme with student and module details"
git push origin main
