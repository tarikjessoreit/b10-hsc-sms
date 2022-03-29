<?php 
// count all student

function count_students(){
	global $conn;
    $conn->query("SELECT * FROM students");
    return $conn -> affected_rows;
}

function count_1st_year_students(){
	global $conn;
    $conn->query("SELECT * FROM students WHERE std_year = '1st'");
    return $conn -> affected_rows;
}

function count_2nd_year_students(){
	global $conn;
    $conn->query("SELECT * FROM students WHERE std_year = '2nd'");
    return $conn -> affected_rows;
}
