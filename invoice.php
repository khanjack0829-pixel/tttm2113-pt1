<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="mb-1">Invoice</h2>
                <p class="text-muted mb-0">Order #O001</p>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary" onclick="window.print()">
                    <i class="bi bi-printer me-1"></i>Print
                </button>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body p-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>AeroCrisp Store</h4>
                <p class="text-muted mb-0">Sales Invoice</p>
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Invoice No.: </strong>O001<br>
                <strong>Date: </strong>2026-10-03
            </div>
        </div>
        <hr>
        <div class="row mb-4">
            <div class="col-md-6">
                <strong>Customer</strong><br>
                Alice Johnson<br>
                012-3456789
            </div>
            <div class="col-md-6 text-md-end">
                <strong>Staff</strong><br>
                Jane Smith<br>
                janesmith@example.com
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Philips Essential Airfryer XL (6.2L)</td>
                        <td>RM 699.00</td>
                        <td>1</td>
                        <td class="text-end">RM 699.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Xiaomi Smart Air Fryer Pro (4.0L)</td>
                        <td>RM 359.00</td>
                        <td>1</td>
                        <td class="text-end">RM 359.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Grand Total</th>
                        <th class="text-end">RM 1,058.00</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <a href="orderdetails.php" class="btn btn-secondary"><i class="bi bi-arrow-left me-1"></i>Back to Details</a>
    </div>
</div>

<style>
@media print {
    #mySidebar,
    #myBurger,
    .btn {
        display: none !important;
    }
    .card {
        box-shadow: none !important;
        border: none !important;
    }
    body, .bg-light {
        background-color: #ffffff !important;
    }
}
</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>