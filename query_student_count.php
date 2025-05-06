<?php
include 'db.php';

$sql = "SELECT c.course_name, COUNT(e.student_id) AS student_count
        FROM courses c
        LEFT JOIN enrollments e ON c.course_id = e.course_id
        GROUP BY c.course_id";
$result = $conn->query($sql);

echo "<h3>Student count per course:</h3>";
while ($row = $result->fetch_assoc()) {
    echo $row['course_name'] . ": " . $row['student_count'] . "<br>";
}

$conn->close();
?>
