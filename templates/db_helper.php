<?php
// db_helper.php

// working, do not touch!
// This file provides core database connectivity and helper functions.

require_once 'db_config.php';

/**
 * Establishes a connection to the MySQL database.
 * The connection is stored in a static variable to prevent multiple connections.
 * 
 * @return mysqli The mysqli connection object.
 * @throws Exception If the connection fails.
 */
function getDbConnection() {
    static $conn = null;

    if ($conn === null) {
        // Suppress default errors to handle them manually
        mysqli_report(MYSQLI_REPORT_OFF);

        $conn = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($conn->connect_error) {
            // Throw a detailed exception to be caught by the calling script.
            throw new Exception("Database Connection Error: " . $conn->connect_error);
        }
        
        $conn->set_charset("utf8mb4");
    }
    
    return $conn;
}

/**
 * Logs a development action to the `action_log` table.
 * This is the standard for tracking all AI agent activities.
 *
 * @param string $action_type A category for the action (e.g., 'Fix Bug', 'Add Feature', 'Refactor').
 * @param string $details A detailed description of the change.
 * @param string|null $file_path The primary file that was modified.
 * @param string $status The status of the action (e.g., 'success', 'error', 'info').
 * @throws Exception If the database operation fails.
 */
// working, do not touch!
function log_action($action_type, $details = '', $file_path = null, $status = 'success') {
    $conn = getDbConnection();

    $sql = "INSERT INTO action_log (action_type, details, file_path, status) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        throw new Exception("log_action prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("ssss", $action_type, $details, $file_path, $status);
    
    if (!$stmt->execute()) {
        $error = $stmt->error;
        $stmt->close();
        throw new Exception("log_action execute failed: " . $error);
    }
    
    $stmt->close();
}
