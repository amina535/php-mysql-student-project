<?php
include 'db.php';

$sql = "SELECT c.course_name FROM courses c
        JOIN enrollments e ON c.course_id = e.course_id
        JOIN students s ON e.student_id = s.student_id
        WHERE s.name = 'Alice'";
$result = $conn->query($sql);

echo "<h3>Courses taken by Alice:</h3>";
while ($row = $result->fetch_assoc()) {
    echo $row['course_name'] . "<br>";
}

$conn->close();
?>
