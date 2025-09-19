<?php
// db_init.php

// working, do not touch!
// This script initializes the database by creating the required tables.
// Run this script once from your browser after you have configured db_config.php.

require_once 'db_helper.php';

header('Content-Type: text/html; charset=utf-8');
echo "<h1>Database Initialization</h1>";

try {
    // Get the database connection.
    $conn = getDbConnection();

    echo "<p style='color: green; font-weight: bold;'>Successfully connected to the database '" . DB_NAME . "'.</p>";
    echo "<hr>";
    echo "<h2>Creating Tables...</h2>";

    // SQL to create the mandatory 'action_log' table for AI agent tracking.
    // Add other CREATE TABLE statements here for your project-specific needs.
    $sql_action_log = "CREATE TABLE IF NOT EXISTS action_log (
        id INT AUTO_INCREMENT PRIMARY KEY,
        timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        agent_id VARCHAR(50) NOT NULL DEFAULT 'AI_Agent',
        action_type VARCHAR(50) NOT NULL,
        file_path VARCHAR(255) NULL,
        details TEXT,
        status VARCHAR(20) NOT NULL COMMENT 'e.g., success, error, warning, info'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    // Execute the queries.
    if ($conn->query($sql_action_log) === TRUE) {
        echo "<p style='color: green;'>✅ Table 'action_log' created or already exists.</p>";
    } else {
        throw new Exception("Error creating table 'action_log': " . $conn->error);
    }

    echo "<h3>Database initialization complete!</h3>";
    echo "<p><strong>Security Recommendation:</strong> For security reasons, you may want to delete or rename this `db_init.php` file now that the setup is complete.</p>";


} catch (Exception $e) {
    // If there was an error, display it.
    echo "<p style='color: red; font-weight: bold;'>❌ ERROR: An exception occurred.</p>";
    echo "<p><strong>Error message:</strong> " . $e->getMessage() . "</p>";
    if (defined('DB_NAME')) {
        echo "<p><strong>Tip:</strong> Make sure you have created the database '<code>" . DB_NAME . "</code>' in your MySQL admin panel (like phpMyAdmin or HeidiSQL) before running this script.</p>";
    }
}
