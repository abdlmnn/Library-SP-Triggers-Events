<?php
include_once '../config/init.php';

$middleware->checkAuth();

include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="container mt-4">
  <div class="row mb-4">
    <div class="col text-center">
      <h2 class="fw-bold">Welcome Back!</h2>
      <p class="text-muted">Library Management Admin Dashboard</p>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <i class="bi bi-book display-5 text-primary mb-2"></i>
          <h5 class="card-title">Manage Books</h5>
          <a href="book.php" class="btn btn-primary btn-sm mt-2">View Books</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <i class="bi bi-calendar-check display-5 text-success mb-2"></i>
          <h5 class="card-title">Borrow Records</h5>
          <a href="borrow_records.php" class="btn btn-success btn-sm mt-2">View Records</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <i class="bi bi-person-gear display-5 text-info mb-2"></i>
          <h5 class="card-title">Users</h5>
          <a href="user.php" class="btn btn-info btn-sm text-white mt-2">Manage Users</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
          <i class="bi bi-clipboard-data display-5 text-secondary mb-2"></i>
          <h5 class="card-title">System Logs</h5>
          <a href="logs.php" class="btn btn-secondary btn-sm mt-2">View Logs</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'includes/footer.php';
?>