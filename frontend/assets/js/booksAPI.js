const tbody = document.getElementById('booksTableBody');
const addForm = document.getElementById('addBookForm');

document.addEventListener('DOMContentLoaded', async () => {
    const res = await fetch('../backend/actions/book.php');
    const data = await res.json();
    console.log(data);
    if(data.success){
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
                <a href="edit_book.php?id=${book.book_id}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger" onclick="deleteBook(${book.book_id})">Delete</button>
                </td>
            </tr>
            `;
            tbody.innerHTML += row;
        });
    }else{
      tbody.innerHTML = `<tr><td colspan="8" class="text-center text-danger">No books found</td></tr>`;
    }
});



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
    }else{
        console.log('Error');
    }
});



