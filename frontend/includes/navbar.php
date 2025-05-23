<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="dashboard.php">
      <i class="bi bi-journal-bookmark-fill me-2"></i>Library System
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#libraryNavbar" aria-controls="libraryNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="libraryNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-1">
        <li class="nav-item">
          <a class="nav-link active" href="book.php"><i class="bi bi-book me-1"></i>Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="borrow_records.php"><i class="bi bi-calendar-check me-1"></i>Borrow Records</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logs.php"><i class="bi bi-clipboard-data me-1"></i>Logs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php"><i class="bi bi-person-gear me-1"></i>Users</a>
        </li>
        <li class="nav-item">
            <button type="button" id="logoutBtn" class="btn btn-sm btn-outline-light"><i class="bi bi-box-arrow-right me-1"></i>Logout</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
