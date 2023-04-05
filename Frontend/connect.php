<?php
$host = "localhost"; // Your database host
$port = "5432"; // Your database port
$dbname = "Capstone"; // Your database name
$user = "postgres"; // Your database username
$password = "ChamplinWildcat8085!"; // Your database password

// Create a database connection
$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Check if the connection was successful
if(!$db){
   echo "Error : Unable to open database\n";
} else {
   echo "Opened database successfully\n";
}

// Retrieve form data
// More secure using POST compared to GET
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$parentFirstName = $_POST['parentFirstName'];
$parentLastName = $_POST['parentLastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];


//Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO users (firstName, lastName, age,
       dob, parentFirstName, parentLastName, email, phoneNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_program("ssisssss",$firstName, $lastName, $age, $dob, $parentFirstName, $parentLastName,
         $email, $phoneNumber); 


// Execute SQL statement
if ($stmt->execute()) {
   // Data inserted successfully
   echo "Data has been successfully inserted into the databse.";
} else {
   // Error inserting data
   echo "Error inserting data into the databse: " . $stmt->error;
}


// Close the database connection
pg_close($db);
?>