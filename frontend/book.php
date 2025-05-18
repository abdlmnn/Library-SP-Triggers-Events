<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Books - Library System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Library Books</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBookModal">Add New Book</button>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark">
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Copies</th>
            <th>Available</th>
            <th>Status</th>
            <th>Date Added</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody id="booksTableBody">
            
        </tbody>
        </table>
    </div>
    </div>

    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="addBookForm" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Add New Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                    </div>
                    <div class="mb-3">
                    <label for="copies" class="form-label">Copies</label>
                    <input type="number" class="form-control" id="copies" name="copies" required min="1">
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add Book</button>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../frontend/assets/js/booksAPI.js" defer></script>


<script>
  const addBookModal = document.getElementById('addBookModal');
  addBookModal.addEventListener('hide.bs.modal', () => {
    if (document.activeElement && addBookModal.contains(document.activeElement)) {
      document.activeElement.blur(); // Remove focus to avoid aria-hidden error
    }
  });
</script>
</body>
</html>
