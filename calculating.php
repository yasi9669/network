 
<?php
// var_dump($_POST);
$error = null;
$first = $_POST['first'];
$second = $_POST['second'];
$action = $_POST['action'];

if ($action == 'add') {
    $result = $first  + $second;
} else if ($action == 'subtract') {
    $result = $first  - $second;
} else if ($action == 'times') {
    $result = $first  * $second;
} else if ($action == 'divide' && $second != 0) {
    $result = $first  / $second;
} else {
    $error = "second number is wrong!";
}

if ($error)
    header("Location: ./calculator.php?err=" . $error);
else
    header("Location: ./calculator.php?result=" . $result);
?>
