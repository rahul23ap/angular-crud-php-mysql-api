<?php
$data = json_decode(file_get_contents("php://input"));
echo "<pre>";
print_r($data);
echo "</pre>";

include "db.php";
$sql = "SELECT * FROM products WHERE id = '$data->id'";
echo $sql; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     $data = array() ;
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}
echo json_encode($data);
$conn->close();
?>
