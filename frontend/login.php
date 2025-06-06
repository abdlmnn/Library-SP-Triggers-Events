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
      <div class="alert alert-danger" style="display: none;"></div>
      <form id="loginForm">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
  <script src="assets/js/loginAPI.js?v=1.2" defer></script>
</body>
</html>