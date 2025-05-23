<?php
include_once '../config/init.php';

// if (!isset($_SESSION['user'])) {
//   $router->redirect('login');
// }

include 'includes/header.php';
include 'includes/navbar.php';
?>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold"><i class="bi bi-book display-5 text-black" style="font-size: 2rem;"></i> Library Books</h2>
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBookModal">
                <i class="bi bi-plus-circle me-1"></i> Add New Book
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="table-dark text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Copies</th>
                    <th scope="col">Available</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date Added</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody id="booksTableBody" class="text-center">

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
                    <input type="number" class="form-control" id="copies" name="copies" required>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editBookModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form id="editBookForm" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="book_id" id="editBookId">
                    <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" id="editTitle" class="form-control" required>
                    </div>
                    <div class="mb-3">
                    <label>Author</label>
                    <input type="text" name="author" id="editAuthor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                    <label>Copies</label>
                    <input type="number" name="copies" id="editCopies" class="form-control" min="0" required>
                    </div>
                    <div class="mb-3">
                    <label>Available</label>
                    <input type="number" name="available" id="editAvailable" class="form-control" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../frontend/assets/js/booksAPI.js?v=1.1"></script>
<?php include 'includes/footer.php'; ?>
