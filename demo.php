<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image'])) {
        $uploadDirectory = 'uploads/';

        // Ensure the 'uploads' directory exists
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $destination = $uploadDirectory . $fileName;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($fileTmpName, $destination)) {
            echo json_encode(['message' => 'File uploaded successfully']);
        } else {
            echo json_encode(['message' => 'Error uploading file']);
        }
    } else {
        echo json_encode(['message' => 'No file uploaded']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="upload-form">
    <h2>Image Upload Form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="uploadForm">
        <div id="drop-zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
            <p>Drag & Drop your image here or click to select</p>
            <input type="file" id="file-input" name="image" accept="image/*" onchange="handleFileSelect(event);">
        </div>
        <button type="submit" name="upload">Upload</button>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
