<?php
include_once '../config/init.php';

if(!isset($_SESSION['user'])){
  $router->redirect('login');
}

include 'includes/header.php';
?>
  <h2>Welcome, <?php echo $_SESSION['user']['username'] ?>!</h2>
  <p>This is the dashboard.</p>
  <button id="logoutBtn">Logout</button>
  <a href="book.php">Books</a>
<?php
include 'includes/footer.php';
?>