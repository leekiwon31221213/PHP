<?php
// can you make the sample pagination code in php? 질문 

//gpt 답변
// Database connection - modify with your database details
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Define the number of results per page
$resultsPerPage = 10;

// Find out the number of results stored in the database
$sql = "SELECT COUNT(id) AS total FROM your_table";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalPages = ceil($row["total"] / $resultsPerPage);

// Determine which page number visitor is currently on
$page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

// Calculate the starting number for the results on the displaying page
$startingLimitNumber = ($page - 1) * $resultsPerPage;

// Retrieve the selected results from the database
$sql = "SELECT * FROM your_table LIMIT " . $startingLimitNumber . ',' . $resultsPerPage;
$result = $conn->query($sql);

// Display the retrieved results
while($row = $result->fetch_assoc()) {
  echo $row["your_column_name"] . "<br>";
}

// Display the pagination links
for ($page = 1; $page <= $totalPages; $page++) {
  echo '<a href="your_script.php?page=' . $page . '">' . $page . '</a> ';
}

// Close connection
$conn->close();
?>