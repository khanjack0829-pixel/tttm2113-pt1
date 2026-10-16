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

## Core Module Architecture
- **Home View (\`home.php\`)**: Landing dashboard with hero section and system stat metrics.
- **Product Management (\`products.php\`)**: Product catalog registration and inventory list with custom categorical fields: **Capacity (L)** and **Control Type**.
- **Customer Management (\`customers.php\`)**: Customer registration form and directory.
- **Staff Management (\`staffs.php\`)**: Staff records and contact registry.
- **Order Processing (\`orders.php\` & \`orderdetails.php\`)**: Order transaction creation, line-item attachment, and calculations.
- **Invoice System (\`invoice.php\`)**: Print-optimized customer sales invoice utilizing custom \`@media print\` queries.

## Tech Stack & Dependencies
- **Styling Framework:** Bootstrap 5.3.0-alpha3
- **Icon Set:** Bootstrap Icons 1.13.1
- **Server Environment:** Apache (Laragon) / Linux (LRGS UKM)
- **Templating:** PHP Output Buffering Architecture
"@ | Out-File -FilePath README.md -Encoding utf8

git add README.md
git commit -m "docs: add comprehensive project readme with student and module details"
git push origin main
