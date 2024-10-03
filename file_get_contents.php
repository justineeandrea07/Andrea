<?php
// Check if the file name is provided in the URL
if (isset($_GET['fileName'])) {
    $fileName = $_GET['fileName'];

    // Check if the file exists
    if (file_exists($fileName)) {
        // Read and display the content of the file
        $content = file_get_contents($fileName);
        echo "<h2>File Content (file_get_contents):</h2>";
        echo "<pre>" . htmlspecialchars($content) . "</pre>";
    } else {
        echo "<p><strong>Error:</strong> File does not exist.</p>";
    }
} else {
    echo "<p><strong>Error:</strong> No file name provided.</p>";
}
?>
