
<?php
session_start();

// header('location:login.php?chr=' . $chr);
$name = $_POST['name'];
$num = $_POST['number'];
$password = $_POST['pass'];

if (!preg_match("/^[a-zA-z]*$/", $name)) {
    $message = "Only alphabets and whitespace are allowed.";
    header('location:login.php?message=' . $message);
}
if (!preg_match("/^[0-9]*$/", $num)) {
    $text = "Only numeric value is allowed.";
    header('location:login.php?text=' . $text);
}
if (empty($name) && empty($password)) {
    $err = "You must enter an address";
    header('location:login.php?err=' . $err);
} elseif (isset($_SESSION)) {
    if ($password === $_SESSION['password']) {
        echo ' <div class="text-center"';
        echo '<p class="font-italic">Valid.php</p></div>';
    } else {
        $invalid = "<table class='table table-striped'><tr><td scope='col'>Name</td> <td scope='col'>ID</td><td scope='col'>Password</td></tr>";
        $invalid  .= "IN_VALID <br><tr><td>" . $name . "</td><td>" . $num . "</td><td>" . $password . "</td></tr>";
        header('location:login.php?invalid=' . $invalid);
    }
} else {
    echo "session_is not set";
}
