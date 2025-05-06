<?php
// استدعاء الاتصال بقاعدة البيانات
require 'db.php';

// قراءة البيانات من الـ POST
$data = json_decode(file_get_contents("php://input"));

if (isset($data->name)) {
    $name = htmlspecialchars(strip_tags($data->name));
    

    $sql = "INSERT INTO users (name) VALUES (:name)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([':name' => $name])) {
        http_response_code(201); // Created
        echo json_encode(["message" => "User created successfully"]);
    } else {
        http_response_code(500); // Server error
        echo json_encode(["message" => "Failed to create user"]);
    }
} else {
    http_response_code(400); // Bad request
    echo json_encode(["message" => "Incomplete data"]);
}
?>
