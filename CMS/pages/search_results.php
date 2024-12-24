<?php
if (isset($_GET['searchQuery'])) {
    $searchQuery = $_GET['searchQuery'];

    // Database Connection
    require('connect.php');
    $query = "SELECT * FROM form WHERE Name LIKE '%$searchQuery%' OR Fname LIKE '%$searchQuery%' OR Email LIKE '%$searchQuery%'";
    $result = mysqli_query($connect, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Output the search results
            echo $row['ID'] . " - " . $row['Name'] . " - " . $row['Fname'] . " - " . $row['Email'] . "<br>";
        }
    } else {
        echo "No results found for '$searchQuery'.";
    }
}
?>
