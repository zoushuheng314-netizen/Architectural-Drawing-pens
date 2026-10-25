<?php
ob_start();
?>


<div class="card shadow border-0 bg-primary text-white mb-4">
    <div class="card-body p-4 p-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <h1 class="display-5 fw-bold mb-2">Architectural Drawing Pens</h1>
                <p class="lead mb-3">Welcome to the Inventory & Sales Management System for Professional Technical & Drawing Pens.</p>
                <a href="products.php" class="btn btn-light text-primary btn-lg fw-bold">
                    <i class="bi bi-box-seam me-2"></i>Manage Inventory
                </a>
            </div>
            <div class="col-lg-3 text-center d-none d-lg-block">
                <i class="bi bi-pen display-1"></i>
            </div>
        </div>
    </div>
</div>


<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-box-seam fs-1 text-primary me-3"></i>
                <div>
                    <h6 class="text-muted mb-0">Total Products</h6>
                    <h4 class="fw-bold mb-0">24</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-people fs-1 text-success me-3"></i>
                <div>
                    <h6 class="text-muted mb-0">Total Customers</h6>
                    <h4 class="fw-bold mb-0">89</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-person-badge fs-1 text-warning me-3"></i>
                <div>
                    <h6 class="text-muted mb-0">Total Staffs</h6>
                    <h4 class="fw-bold mb-0">12</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-cart-check fs-1 text-info me-3"></i>
                <div>
                    <h6 class="text-muted mb-0">Total Orders</h6>
                    <h4 class="fw-bold mb-0">158</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3"><i class="bi bi-stars text-warning me-2"></i>Featured Product Lines</h5>
        <div id="homeCarousel" class="carousel slide bg-dark rounded overflow-hidden" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active p-5 text-center text-white">
                    <h3 class="fw-bold">Rotring Technical Pens</h3>
                    <p class="mb-0">High-precision ink technical pens designed for architectural drafting and engineering.</p>
                </div>
                <div class="carousel-item p-5 text-center text-white">
                    <h3 class="fw-bold">Staedtler Pigment Liners</h3>
                    <p class="mb-0">Waterproof and lightfast fineliners ideal for precision sketches and technical drawings.</p>
                </div>
                <div class="carousel-item p-5 text-center text-white">
                    <h3 class="fw-bold">Sakura Pigma Micron</h3>
                    <p class="mb-0">Archival quality pigment ink pens available in nib sizes from 0.1mm to 0.8mm.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


<div class="row g-3">
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-pen-fill fs-1 text-primary mb-2"></i>
                <h5 class="card-title">Products</h5>
                <p class="card-text text-muted small">Manage drawing pens, nib sizes, and ink options.</p>
                <a href="products.php" class="btn btn-outline-primary btn-sm">Go to Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-people-fill fs-1 text-success mb-2"></i>
                <h5 class="card-title">Customers</h5>
                <p class="card-text text-muted small">Manage client details and registration records.</p>
                <a href="customers.php" class="btn btn-outline-success btn-sm">Go to Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-person-badge-fill fs-1 text-warning mb-2"></i>
                <h5 class="card-title">Staffs</h5>
                <p class="card-text text-muted small">Maintain staff contacts and sales team profiles.</p>
                <a href="staffs.php" class="btn btn-outline-warning btn-sm">Go to Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <i class="bi bi-cart-fill fs-1 text-info mb-2"></i>
                <h5 class="card-title">Orders</h5>
                <p class="card-text text-muted small">Process orders, select items, and print invoices.</p>
                <a href="orders.php" class="btn btn-outline-info btn-sm">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>