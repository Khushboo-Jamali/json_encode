<?php
$conn = mysqli_connect('localhost', 'root', '', 'jsondata');

// $id = $_POST['id'];

// $sql = "SELECT * FROM students WHERE id = {$_POST['id']}";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo "<pre>";
// print_r($output);
// echo "</pre>";
echo json_encode($output);
