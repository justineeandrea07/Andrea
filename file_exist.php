<?php
// Check if the file name is provided in the URL
if (isset($_GET['fileName'])) {
    $fileName = $_GET['fileName'];

    // Check if the file exists
    if (file_exists($fileName)) {
        echo "<p><strong>File Exists:</strong> The file '$fileName' exists.</p>";
    } else {
        echo "<p><strong>Error:</strong> File does not exist.</p>";
    }
} else {
    echo "<p><strong>Error:</strong> No file name provided.</p>";
}
?>
