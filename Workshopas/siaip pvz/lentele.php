 <?php


 // Prisijungimo duomenys
$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';
// Prisijungiame prie duomenų bazės 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}