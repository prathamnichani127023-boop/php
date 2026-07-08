<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<h2>PHP String Functions</h2>

<form method="post">
    Enter a String: <input type="text" name="str" required><br><br>

    Enter Word to Find: <input type="text" name="find" required> <br><br>

    <input type="submit" value="Show Result">
</form>

<?php
if(isset($_POST['str']))
{
    $str = $_POST['str'];
    $find = $_POST['find'];


    echo "Enter String: " . $str . "<br><br>";

    // strlen
    echo "1. String Length: " . strlen($str) . "<br><br>";

    // strpos
    $pos = strpos($str, $find);

    if($pos !== false)
    {  
        echo "2. '$find' found at position: " . $pos . "<br><br>";
    } 
    else
    {
        echo "2. '$find' not found.<br><br>";
    }

    // str_word_count
    echo "3. Number of Words: " . str_word_count($str) . "<br><br>";

    // strrev
    echo "4. Reverse String: " . strrev($str) . "<br><br>";

    // strtolower
    echo "5. Lowercase: " . strtolower($str) . "<br><br>";

    // strtoupper
    echo "6. Uppercase: " . strtoupper($str);
}
?>

</body>
</html>