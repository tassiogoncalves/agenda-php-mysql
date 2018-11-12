<?php

include "../config.php";

// Get search term
$searchTerm = $_GET['term'];

// Get matched data from agenda table
$sql = "SELECT * FROM agenda WHERE nome LIKE '%".$searchTerm."%' ORDER BY nome ASC";

$query = mysqli_query($con, $sql);

// Generate skills data array
$complete = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['value'] = $row['nome'];
        array_push($complete, $data);
    }
}

// Return results as json encoded array
echo json_encode($complete);

?>