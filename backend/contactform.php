<?php

print_r($_REQUEST);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$input = $fullname . " " . $email . " " . $message . "\n";

file_put_contents('../doc/form.txt', $input, FILE_APPEND);

?>