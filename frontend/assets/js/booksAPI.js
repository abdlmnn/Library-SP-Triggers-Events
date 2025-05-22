document.addEventListener('DOMContentLoaded', async () => {
    const tbody = document.getElementById('booksTableBody');
    const res = await fetch('../backend/actions/book.php');
    const data = await res.json();
    console.log(data);
    if(data.success){
        tbody.innerHTML = '';
        data.books.forEach(book => {
            const row = `
            <tr>
                <td>${book.book_id}</td>
                <td>${book.title}</td>
                <td>${book.author}</td>
                <td>${book.copies}</td>
                <td>${book.available}</td>
                <td>${book.status}</td>
                <td>${book.date_added}</td>
                <td>
                    <button class="btn btn-sm btn-warning" onclick='openEditModal(${JSON.stringify(book)})'>Edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deleteBook(${book.book_id})">Delete</button>
                </td>
            </tr>
            `;
            tbody.innerHTML += row;
        })
    }
});




const addForm = document.getElementById('addBookForm');
addForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const res = await fetch('../backend/actions/addbook.php',{
        method: 'POST',
        body: formData,
    });
    const data = await res.json();
    console.log(data);
    if(data.success){
        console.log(data.message);
        location.reload();
    }
});





const openEditModal = (book) => {
    document.getElementById('editBookId').value = book.book_id;
    document.getElementById('editTitle').value = book.title;
    document.getElementById('editAuthor').value = book.author;
    document.getElementById('editCopies').value = book.copies;
    document.getElementById('editAvailable').value = book.available;
    const editModal = new bootstrap.Modal(document.getElementById('editBookModal'));
    editModal.show();
}
document.addEventListener('DOMContentLoaded', async () => {
    const editForm = document.getElementById('editBookForm');
    editForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const res = await fetch('../backend/actions/editbook.php', {
            method: 'POST',
            body: formData,
        });
        const data = await res.json();
        console.log(data);
        if(data.success){
            console.log(data.message);
            location.reload();
        }
    });
});











const deleteBook = async (book_id) => {
    const formData = new FormData();
    formData.append('book_id', book_id);
    const res = await fetch('../backend/actions/deletebook.php', {
        method: 'POST',
        body: formData,
    });
    const data = await res.json();
    console.log(data);
    if(data.success){
        console.log(data.message);
        location.reload();
    }
}



const addBookModal = document.getElementById('addBookModal');
const editBookModal = document.getElementById('editBookModal');
addBookModal.addEventListener('hide.bs.modal', () => {
    if (document.activeElement && addBookModal.contains(document.activeElement)) {
      document.activeElement.blur(); // Remove focus to avoid aria-hidden error
    }
});
editBookModal.addEventListener('hide.bs.modal', () => {
    if (document.activeElement && editBookModal.contains(document.activeElement)) {
      document.activeElement.blur(); // Remove focus to avoid aria-hidden error
    }
});