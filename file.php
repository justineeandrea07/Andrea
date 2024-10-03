<?php
// Check if the file name is provided in the URL
if (isset($_GET['fileName'])) {
    $fileName = $_GET['fileName'];

    // Check if the file exists
    if (file_exists($fileName)) {
        // Read the content of the file into an array
        $fileArray = file($fileName);
        echo "<h2>File Content as Array (file()):</h2>";
        echo "<pre>";
        print_r($fileArray);
        echo "</pre>";
    } else {
        echo "<p><strong>Error:</strong> File does not exist.</p>";
    }
} else {
    echo "<p><strong>Error:</strong> No file name provided.</p>";
}
?>
