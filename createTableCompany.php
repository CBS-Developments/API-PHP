<?php
$username = "cbsworkspace_db"; //change username 
$password = "yesz46KNw2"; //change password
$host = "localhost";
$db_name = "cbsworkspace_db"; //change databasename

// Create connection
$con = mysqli_connect($host, $username, $password, $db_name);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS beneficiaries ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cin_no VARCHAR(100) NOT NULL,
    beneficiary_full_name VARCHAR(255) NOT NULL,
    name_with_initial VARCHAR(200) NOT NULL,
    short_key VARCHAR(100) NOT NULL,
    entity_type VARCHAR(100) NOT NULL,
    registration_no  VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    fixed_line VARCHAR(100) NOT NULL,
    mobile VARCHAR(100) NOT NULL,
    whatsapp_No VARCHAR(100) NOT NULL,
    address_ VARCHAR(100) NOT NULL,
    resident_country VARCHAR(100) NOT NULL,
    country_citizen VARCHAR(100) NOT NULL,
    contact_person_name VARCHAR(100) NOT NULL,
    designation VARCHAR(100) NOT NULL,
    contact_person_mobile VARCHAR(100) NOT NULL,
    contact_person_Wh VARCHAR(100) NOT NULL,
    contact_person_email VARCHAR(100) NOT NULL,
    services_category VARCHAR(20) NOT NULL,
    activate VARCHAR(20) NOT NULL
)"; // Added closing parenthesis here

 if ($con->query($sql) === TRUE) {

    echo "Table created successfully";
} else {
    echo "Error creating table: " . $con->error;
}
