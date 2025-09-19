<?php
// db_config.php

// working, do not touch!
// This file contains the database connection credentials.
// It automatically switches between LOCALHOST and LIVE settings.

// --- Environment Detection ---
// Detect if the server is a local development environment.
// Add your local server names to this array if they are different.
$local_hosts = ['localhost', '12-7.0.0.1'];
$is_local = in_array($_SERVER['HTTP_HOST'], $local_hosts);

if ($is_local) {
    // --- LOCALHOST Database Credentials ---
    // Common defaults for local servers like XAMPP/Laragon are user 'root' and an empty password.
    // Adjust these to match your local setup.
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'your_database_name');
    
    // Set to true to display detailed database errors on local environment
    define('DB_DEBUG', true);

} else {
    // --- LIVE Server Database Credentials ---
    // Replace the placeholder values below with your actual live server details.
    define('DB_HOST', 'your_live_host');
    define('DB_USER', 'your_live_username');
    define('DB_PASS', 'your_live_password');
    define('DB_NAME', 'your_live_database_name');
    
    // Set to false for production to hide detailed errors
    define('DB_DEBUG', false);
}
