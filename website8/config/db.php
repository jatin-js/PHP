<?php
# Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);     // MYSQL Improved is an extension to start working with database Mysql

# Check Connection
if (mysqli_connect_errno()) {
    // Connection Failed
    echo 'Failed to connect to MYSQL' . mysqli_connect_errno();
}
