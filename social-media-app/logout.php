<?php 
include 'includes/config.php'; 
echo $style;

// Destroy session data
session_unset();
session_destroy();
?>

<div class="card" style="text-align: center;">
    <h2>Logged Out</h2>
    <p class="success-msg">Thank you for using the system.</p>
    <button onclick="location.href='index.php'">BACK TO LOGIN</button>
</div>

<script>
    // Prevents accessing the landing page via the browser back button after logout
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>