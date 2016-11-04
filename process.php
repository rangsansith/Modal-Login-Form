<?php

// process.php

$errors = array();  // array to hold validation errors
$data = array();        // array to pass back data
$message = '<div align="center">Submitted Successfully</div>';

$name = test_Inputs($_POST['name']);
$pass = test_Inputs($_POST['password']);

// validate the variables ========
if (empty($name))
    $errors['name'] = 'Name is required.';

if (empty($pass))
    $errors['password'] = 'Password is required.';

if(@!preg_match("/^[A-z\s]*$/", $name))
    $errors['name'] = 'Only letters and whitespaces allowed';

if(@!preg_match("/^[A-z0-9]+$/", $pass))
    $errors['password'] = 'Only letters and numbers allowed';


// return a response ==============

// response if there are errors
if ( ! empty($errors)) {

    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {

    // if there are no errors, return a message
    $data['success'] = true;
    $data['message'] = $message;
}

// return all our data to an AJAX call
echo json_encode($data);

function test_Inputs($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}