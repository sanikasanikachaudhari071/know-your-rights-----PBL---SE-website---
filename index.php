<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'author' and 'comment' fields are set and not empty
    if (isset($_POST["author"]) && isset($_POST["comment"]) && !empty($_POST["author"]) && !empty($_POST["comment"])) {
        
        $connection = new mysqli("localhost", "root", "sEb/JjWV7)57(YBK", "finals");
        
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $author = $_POST["author"];
        $comment = $_POST["comment"];

        // Prepare the insert statement
        $stmt = $connection->prepare("INSERT INTO comment (author, comment) VALUES (?, ?)");
        $stmt->bind_param("ss", $author, $comment);

        // Execute the statement
        if ($stmt->execute()) {
            header("location: index2.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $connection->close();
    } else {
        // Redirect with error if 'author' or 'comment' fields are empty
        header("location: index2.php?error=1");
        exit();
    }
} else {
    // Redirect if accessed directly without POST request
    header("location: index2.php");
    exit();
}
?>
