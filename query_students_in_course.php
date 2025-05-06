<?php
require 'db.php';

$sql = "SELECT s.name FROM students s
        JOIN enrollments e ON s.student_id = e.student_id
        JOIN courses c ON e.course_id = c.course_id
        WHERE c.course_name = 'Math'";
$result = $conn->query($sql);

echo "<h3>Students enrolled in Math:</h3>";
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}

$conn->close();
?>
