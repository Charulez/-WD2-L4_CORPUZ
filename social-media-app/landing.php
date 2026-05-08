<?php 
include 'includes/config.php'; 
echo $style;

// Guard Clause: Redirect if not logged in
if (!isset($_SESSION['user_name'])) {
    header('Location: index.php');
    exit();
}
?>

<div class="card">
    <h2>Welcome, <?php echo $_SESSION['user_name']; ?></h2>
    
    <div class="session-box">
        <strong>Session Details:</strong><br>
        User: <?php echo $_SESSION['user_name']; ?><br>
        Log Time: <?php echo $_SESSION['start_time']; ?><br>
        Status: Active
    </div>

    <form action="logout.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
</div>