<!DOCTYPE html>
<html>
<head> 
    <title>site</title>
</head>
<body>

<?php
$sentence = "the main body of a book";

// Lowercase version
echo strtolower($sentence) . "<br>";

// Uppercase version
echo strtoupper($sentence) . "<br>";

// Replacing "book" with "college"
echo str_replace("book", "college", $sentence) . "<br>";

// Length of the sentence
echo strlen($sentence) . "<br>";
?>

</body>
</html>