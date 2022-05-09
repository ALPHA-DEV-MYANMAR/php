<?php 

require_once "conn.php";

$sql = 'SELECT * FROM to_do';
$query = mysqli_query($conn,$sql);

$total_rows = mysqli_num_rows($query); // Total Rows

include('nav.php');

echo "<ul>";

while($row = mysqli_fetch_assoc($query)){
    $time = date("g:i" , strtotime($row['created_at'] ));
    echo "<li> [ {$row['id']} ] [ $time ] 
    [ <a href='delete.php?id={$row["id"]}' >delete</a> ] 
    [ <a href='update.php?id={$row["id"]}' >edit</a> ] 
    {$row['message']}  </li> ";
}

echo "</ul>";

?>





