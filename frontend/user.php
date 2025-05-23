
<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold"><i class="bi bi-person-gear me-1" style="font-size: 2rem;"></i> User Management</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
      <i class="bi bi-plus-circle me-1"></i> Add New User
    </button>
  </div>

  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="addUserForm" action="your_backend_script.php" method="POST" class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input
                type="text"
                class="form-control"
                id="username"
                name="username"
                required
                maxlength="50"
                placeholder="Enter username"
            />
            </div>
            
            <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                required
                minlength="6"
                placeholder="Enter password"
            />
            </div>

            <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" required>
                <option value="" disabled selected>Select role</option>
                <option value="admin">Admin</option>
                <option value="student">Student</option>
            </select>
            </div>

            <input type="hidden" name="status" value="active" />
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add User</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
        </form>
    </div>
    </div>

  <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle">
      <thead class="table-dark text-center">
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>Role</th>
          <th>Status</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="usersTableBody" class="text-center">
        <tr>
          <td>1</td>
          <td>john_doe</td>
          <td>admin</td>
          <td><span class="badge bg-success">Active</span></td>
          <td>2025-05-20 12:30:00</td>
          <td>
            <button class="btn btn-sm btn-warning" onclick="openEditUserModal(1)">
              <i class="bi bi-pencil-square"></i>
            </button>
            <button class="btn btn-sm btn-danger" onclick="deleteUser(1)">
              <i class="bi bi-trash"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php include 'includes/footer.php'; ?>