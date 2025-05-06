<?php
require 'db.php';

// Insert sample data
$conn->query("INSERT INTO students (student_id, name) VALUES (1, 'Alice'), (2, 'Bob'), (3, 'Charlie')");
$conn->query("INSERT INTO courses (course_id, course_name) VALUES (101, 'Math'), (102, 'Science'), (103, 'History')");
$conn->query("INSERT INTO enrollments (student_id, course_id) VALUES (1, 101), (1, 102), (2, 101)");

echo "Sample data inserted successfully ✅";

$conn->close();
?>
