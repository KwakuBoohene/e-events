<?php

require ('../../database/database.php');
$conn = openDatabase();

$event_id = $_POST['event_id'];

$sql = "SELECT * FROM payment WHERE event_id = $event_id";
$results = $conn->query($sql);
$output='';

if($results){
foreach($results as $result){
    $output.= '<tr>'.
    '<td>'.$result['name'].'</td>'.
    '<td>'.$result['email'].'</td>'.
    '</tr>'; 
}
echo $output;
}

?>