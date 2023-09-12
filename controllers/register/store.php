<?php

use Core\App;

// validate the form -> with javascript at client side

// check if account already exists
// if so, redirect to login page


$db = App::resolve('Core\Database');
$result = $db->query('select * from users where email = :email', [
    'email' => $_POST['email']
])->find();

if ($result) {
    dd($result);
}

    // if not, save on the database and then, log in the user and redirect
