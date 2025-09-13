<?php
// Simple upload test
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['test_image'])) {
    $upload_dir = 'uploads/book_covers/';
    
    // Create directory if it doesn't exist
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    
    $file = $_FILES['test_image'];
    $file_name = 'test_' . time() . '_' . $file['name'];
    $upload_path = $upload_dir . $file_name;
    
    echo "<h3>Upload Test Results:</h3>";
    echo "File name: " . $file['name'] . "<br>";
    echo "File size: " . $file['size'] . " bytes<br>";
    echo "File type: " . $file['type'] . "<br>";
    echo "Upload error: " . $file['error'] . "<br>";
    echo "Temp file: " . $file['tmp_name'] . "<br>";
    echo "Upload directory: " . $upload_dir . "<br>";
    echo "Upload path: " . $upload_path . "<br>";
    echo "Directory exists: " . (file_exists($upload_dir) ? 'Yes' : 'No') . "<br>";
    echo "Directory writable: " . (is_writable($upload_dir) ? 'Yes' : 'No') . "<br>";
    
    if (move_uploaded_file($file['tmp_name'], $upload_path)) {
        echo "<p style='color: green;'>✅ Upload successful! File saved as: " . $file_name . "</p>";
    } else {
        echo "<p style='color: red;'>❌ Upload failed!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Test</title>
</head>
<body>
    <h2>Test Image Upload</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="test_image" accept="image/*" required>
        <br><br>
        <input type="submit" value="Test Upload">
    </form>
    
    <hr>
    <h3>PHP Upload Configuration:</h3>
    <ul>
        <li>file_uploads: <?php echo ini_get('file_uploads') ? 'Enabled' : 'Disabled'; ?></li>
        <li>upload_max_filesize: <?php echo ini_get('upload_max_filesize'); ?></li>
        <li>post_max_size: <?php echo ini_get('post_max_size'); ?></li>
        <li>max_file_uploads: <?php echo ini_get('max_file_uploads'); ?></li>
    </ul>
</body>
</html>
