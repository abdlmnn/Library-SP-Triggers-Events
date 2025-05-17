const logoutBtn = document.getElementById('logoutBtn');
const messageDiv = document.querySelector('.alert');

logoutBtn.addEventListener('click', async () => {
    const res = await fetch('../backend/actions/logout.php', {
        method: 'POST',
        credentials: 'include',
    });
    const data = await res.json();
    console.log(data)
    if(data.success){
        window.location.href = 'login.php';
        console.log(data.message)
    }
});