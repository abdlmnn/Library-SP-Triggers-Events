const loginForm = document.getElementById('loginForm');
const messageDiv = document.querySelector('.alert');

loginForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const res = await fetch('../backend/actions/index.php', {
            method: 'POST',
            body: formData,
        }
    );
    const data = await res.json();
    console.log(data)
    if(data.success){
        console.log(data.message)
    }else{
        messageDiv.style.display = 'block';
        messageDiv.textContent = data.message;
        console.log(data.message)
    }
});