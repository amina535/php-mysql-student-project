<?php
include 'db.php';

$sql = "SELECT s.name FROM students s
        LEFT JOIN enrollments e ON s.student_id = e.student_id
        WHERE e.enrollment_id IS NULL";
$result = $conn->query($sql);

echo "<h3>Students not enrolled in any course:</h3>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['name'] . "<br>";
    }
} else {
    echo "None<br>";
}

$conn->close();
?>
