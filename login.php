<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config/connect.php';

$err = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $res = $stmt->get_result();

  if ($res->num_rows === 1) {
    $user = $res->fetch_assoc();

    if ($password === $user['password']) {
      $_SESSION['user'] = $user;

      $role = strtolower(trim($user['role']));
      if ($role === 'admin') {
        header("Location: index.php");
        exit();
      } elseif ($role === 'staff') {
        header("Location: staff_dashboard.php");
        exit();
      } elseif ($role === 'student') {
        header("Location: student_dashboard.php");
        exit();
      } else {
        $err = "Invalid user role!";
      }
    } else {
      $err = "Incorrect password!";
    }
  } else {
    $err = "User not found!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login - Library System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="min-width: 350px;">
      <h4 class="mb-3 text-center">Library System Login</h4>
      <?php if ($err): ?>
        <div class="alert alert-danger"><?php echo $err; ?></div>
      <?php endif; ?>
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
