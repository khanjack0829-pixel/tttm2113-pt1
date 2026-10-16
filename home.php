<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to AirFryHeaven Store</h2>
        <p class="text-muted mb-0">Smart Kitchen Air Fryer Inventory & Order Management System</p>
    </div>
</div>

<!-- Hero Showcase Card -->
<div class="card shadow-sm mb-4 bg-dark text-white border-0">
    <div class="card-body p-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <span class="badge bg-primary mb-2">Kitchen Appliance Specialist</span>
                <h1 class="display-6 fw-bold mb-3">Healthy, Oil-Free Cooking Made Effortless</h1>
                <p class="lead text-white-50 mb-4">
                    Manage your complete catalog of Philips, Tefal, Ninja, Xiaomi, and Khind air fryers, track customer orders, and generate instant sales invoices.
                </p>
                <a href="products.php" class="btn btn-primary me-2">
                    <i class="bi bi-box-seam me-1"></i>Browse Air Fryers
                </a>
                <a href="orders.php" class="btn btn-outline-light">
                    <i class="bi bi-cart-plus me-1"></i>New Order
                </a>
            </div>
            <div class="col-md-4 text-center d-none d-md-block">
                <i class="bi bi-fire text-warning" style="font-size: 6rem;"></i>
            </div>
        </div>
    </div>
</div>

<!-- Quick Overview Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="text-muted mb-0">Air Fryers</h6>
                    <i class="bi bi-box-seam text-primary fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">20</h3>
                <small class="text-muted">Models in inventory</small>
                <div class="mt-3">
                    <a href="products.php" class="btn btn-sm btn-outline-primary w-100">Manage Products</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="text-muted mb-0">Customers</h6>
                    <i class="bi bi-people text-success fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">3</h3>
                <small class="text-muted">Registered buyers</small>
                <div class="mt-3">
                    <a href="customers.php" class="btn btn-sm btn-outline-success w-100">Manage Customers</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-info">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="text-muted mb-0">Staffs</h6>
                    <i class="bi bi-person-badge text-info fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">3</h3>
                <small class="text-muted">Sales representatives</small>
                <div class="mt-3">
                    <a href="staffs.php" class="btn btn-sm btn-outline-info w-100">Manage Staffs</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="text-muted mb-0">Orders</h6>
                    <i class="bi bi-receipt text-warning fs-3"></i>
                </div>
                <h3 class="fw-bold mb-1">3</h3>
                <small class="text-muted">Completed sales</small>
                <div class="mt-3">
                    <a href="orders.php" class="btn btn-sm btn-outline-warning w-100">Manage Orders</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>