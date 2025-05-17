<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">📚 LibrarySys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="books.php">Books</a></li>
        <li class="nav-item"><a class="nav-link" href="members.php">Members</a></li>
        <li class="nav-item"><a class="nav-link" href="borrow.php">Borrow/Return</a></li>
        <li class="nav-item"><a class="nav-link" href="logs.php">Logs</a></li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle position-relative" href="#" id="notificationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-bell-fill"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <!-- <?php
                include 'db.php'; // your DB connection
                $result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM overdue_notifications WHERE status = 'Unread'");
                $row = mysqli_fetch_assoc($result);
                echo $row['total'];
              ?> -->
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
            <!-- <?php
              $notif_query = mysqli_query($conn, "SELECT * FROM overdue_notifications WHERE status = 'Unread' ORDER BY created_at DESC LIMIT 5");
              if (mysqli_num_rows($notif_query) > 0) {
                while ($n = mysqli_fetch_assoc($notif_query)) {
                  echo "<li><a class='dropdown-item text-wrap' href='#'>{$n['message']} <small class='text-muted d-block'>{$n['created_at']}</small></a></li>";
                }
              } else {
                echo "<li><span class='dropdown-item text-muted'>No new notifications</span></li>";
              }
            ?> -->
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
