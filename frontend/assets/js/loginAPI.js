const loginForm = document.getElementById('loginForm');
const messageDiv = document.querySelector('.alert');

loginForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const res = await fetch('../backend/actions/login.php', {
            method: 'POST',
            body: formData,
        }
    );
    const data = await res.json();
    console.log(data)
    if(data.success){
        if(data.role === 'admin'){
            window.location.href = 'index.php';
        }else if(data.role === 'staff'){
            window.location.href = 'staff/dashboard.php';
        }else{
            window.location.href = 'student/dashboard.php';
        }
        console.log(data.message)
    }else{
        messageDiv.style.display = 'block';
        messageDiv.textContent = data.message;
        console.log(data.message)
    }
});