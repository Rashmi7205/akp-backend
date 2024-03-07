<?php

// Enable CORS (Cross-Origin Resource Sharing)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

// Define database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'akp';

// Create database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all items
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // $result = $conn->query('SELECT * FROM tbl_blog');
    // $items = [];
    // while ($row = $result->fetch_assoc()) {
    //     $items[] = $row;
    // }
    // echo json_encode($items);
}

// Get a single item by ID
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM items WHERE id = $id");
    $item = $result->fetch_assoc();
    echo json_encode($item);
}

// Create a new item
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    print_r ($data['content']);

    file_put_contents('content.txt',$data);

    echo json_encode(['message' => 'Item created successfully']);
}

// Update an existing item by ID
if ($_SERVER['REQUEST_METHOD'] === 'PUT' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $description = $data['description'];

    $sql = "UPDATE items SET name = '$name', description = '$description' WHERE id = $id";
    $conn->query($sql);

    echo json_encode(['message' => 'Item updated successfully']);
}

// Delete an item by ID
if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM items WHERE id = $id");

    echo json_encode(['message' => 'Item deleted successfully']);
}

// Close database connection
$conn->close();
