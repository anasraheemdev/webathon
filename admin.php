<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php include "./bootstrap.php"?>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar bg-dark vh-100">
                <div class="position-sticky">
                    <div class="text-center mb-4">
                        <h2 class="text-white">Admin Panel</h2>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#dashboard" data-bs-toggle="tab">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#admin-module" data-bs-toggle="tab">
                                <i class="fas fa-user-shield me-2"></i>Admin Module
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#customer-module" data-bs-toggle="tab">
                                <i class="fas fa-users me-2"></i>Customer Module
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#analytics" data-bs-toggle="tab">
                                <i class="fas fa-chart-pie me-2"></i>Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settings" data-bs-toggle="tab">
                                <i class="fas fa-cog me-2"></i>Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-10 ms-sm-auto content-area">
                <div class="tab-content">
                    <!-- Dashboard Tab -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Customers</h5>
                                        <p class="card-text display-4" id="total-customers">1,234</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Revenue</h5>
                                        <p class="card-text display-4">$56,789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Pending Orders</h5>
                                        <p class="card-text display-4">42</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Support Tickets</h5>
                                        <p class="card-text display-4">17</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Admin Module Tab -->
                    <div class="tab-pane fade" id="admin-module">
                        <h1 class="mt-4">Admin Management</h1>
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-admin-modal">
                                    <i class="fas fa-plus me-2"></i>Add New Admin
                                </button>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="admin-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- php say yahan abhi lagani hy -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Add Admin Modal -->
                        <div class="modal fade" id="add-admin-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Admin</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="add-admin-form">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select class="form-select">
                                                    <option>Super Admin</option>
                                                    <option>Content Manager</option>
                                                    <option>Support Admin</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Admin</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Module Tab -->
                    <div class="tab-pane fade" id="customer-module">
                        <h1 class="mt-4">Customer Management</h1>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Search Customers" id="customer-search">
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add-customer-modal">
                                            <i class="fas fa-user-plus me-2"></i>Add Customer
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover" id="customer-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Dynamic customer list will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Add Customer Modal -->
                        <div class="modal fade" id="add-customer-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Customer</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="add-customer-form">
                                            <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input type="tel" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="form-select">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                    <option>Pending</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Customer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Analytics Tab -->
                    <div class="tab-pane fade" id="analytics">
                        <h1 class="mt-4">Analytics Dashboard</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card analytics-card">
                                    <div class="card-header">
                                        Customer Growth
                                    </div>
                                    <div class="card-body">
                                        <canvas id="customer-growth-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card analytics-card">
                                    <div class="card-header">
                                        Revenue Distribution
                                    </div>
                                    <div class="card-body">
                                        <canvas id="revenue-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card analytics-card">
                                    <div class="card-header">
                                        Top Customers
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Top customers data -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Tab -->
                    <div class="tab-pane fade" id="settings">
                        <h1 class="mt-4">System Settings</h1>
                        <div class="card">
                            <div class="card-body">
                                <form id="system-settings-form">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company-name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">System Theme</label>
                                        <select class="form-select" id="system-theme">
                                            <option>Light Mode</option>
                                            <option>Dark Mode</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Notification Settings</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="email-notifications">
                                            <label class="form-check-label">
                                                Enable Email Notifications
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sms-notifications">
                                            <label class="form-check-label">
                                                Enable SMS Notifications
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Settings</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
   