<?php 

require_once "conn.php";

$sql = 'SELECT * FROM to_do';
$query = mysqli_query($conn,$sql);

$total_rows = mysqli_num_rows($query); // Total Rows

echo "<ul>";

while($row = mysqli_fetch_assoc($query)){
    $time = date("g:i" , strtotime($row['created_at'] ));
    echo "<li> [ {$row['id']} ] [ $time ] {$row['message']}  </li> ";
}

echo "</ul>";

?>

