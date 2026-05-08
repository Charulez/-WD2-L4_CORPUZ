<?php
session_start();

// Local User Data
$users = [
    ['username' => 'admin', 'password' => '12345', 'name' => 'Charles Corpuz'],
    ['username' => 'student', 'password' => 'pass123', 'name' => 'John Doe']
];

// Minimalist Gray Accent CSS
$style = "
<style>
    body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; color: #343a40; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
    .card { background: #ffffff; padding: 30px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); width: 350px; border-top: 4px solid #6c757d; }
    h2 { margin-bottom: 20px; font-weight: 600; color: #212529; text-align: center; }
    input { width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #dee2e6; border-radius: 4px; box-sizing: border-box; outline-color: #6c757d; }
    button { width: 100%; padding: 12px; background: #6c757d; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; transition: 0.2s; }
    button:hover { background: #495057; }
    .session-box { font-size: 13px; background: #f1f3f5; padding: 15px; border-radius: 4px; margin-bottom: 20px; color: #495057; border-left: 3px solid #ced4da; }
    .error { color: #dc3545; background: #f8d7da; padding: 10px; border-radius: 4px; font-size: 13px; margin-bottom: 15px; text-align: center; }
    .success-msg { text-align: center; margin-bottom: 20px; font-size: 14px; color: #6c757d; }
</style>
";
?>