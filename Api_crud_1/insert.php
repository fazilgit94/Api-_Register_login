<?php
header('content-type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

include "config.php";

$sql = "INSERT INTO students(student_name, age, city) VALUES ('{$name}', '{$age}', '{$city}')";
$run=$conn->query($sql);
if($run){
	echo json_encode(array('message' => 'Student Record Inserted.', 'status' => true));
}else{
 echo json_encode(array('message' => 'Student Record Not Inserted.', 'status' => false));
}
?>