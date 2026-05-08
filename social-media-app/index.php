<?php 
include 'includes/config.php'; 
echo $style;

$error_msg = "";

if (isset($_POST['login'])) {
    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    foreach ($users as $user) {
        if ($user['username'] === $user_input && $user['password'] === $pass_input) {
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['start_time'] = date('Y-m-d H:i:s');
            header('Location: landing.php');
            exit();
        }
    }
    $error_msg = "Invalid username or password.";
}
?>

<div class="card">
    <h2>Login</h2>
    <?php if ($error_msg): ?>
        <div class="error"><?php echo $error_msg; ?></div>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">LOGIN</button>
    </form>
</div>