<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/UserTable.php';

start_session();

// try to register the user - if there are any error/
// exception, catch it and send the user back to the
// login form with an error message
try {
    $formdata = array();
    $errors = array();
    
    $input_method = INPUT_POST;

    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    $formdata['cpassword'] = filter_input($input_method, "cpassword", FILTER_SANITIZE_STRING);

    // throw an exception if any of the form fields 
    // are empty
    if (empty($formdata['username'])) {
        $errors['username'] = "Username required";
    }
    //$email = filter_var($formdata['username'], FILTER_VALIDATE_EMAIL);
    //if ($email != $formdata['username']) {
    //    $errors['username'] = "Valid email required required";
    //}

    if (empty($_POST['password'])) {
        $errors['password'] = "Password required";
    }
    if (empty($formdata['cpassword'])) {
        $errors['cpassword'] = "Confirm password required";
    }
    // if the password fields do not match 
    // then throw an exception
    if (!empty($formdata['password']) && !empty($formdata['cpassword']) 
            && $formdata['password'] != $formdata['cpassword']) {
        $errors['password'] = "Passwords must match";
    }

    if (empty($errors)) {
        // since none of the form fields were empty, 
        // store the form data in variables
        $username = $formdata['username'];
        $password = $formdata['password'];
        $cpassword = $formdata['cpassword'];

        // create a UserTable object and use it to retrieve 
        // the users
        $connection = DB::getConnection();
        $userTable = new UserTable($connection);
        $user = $userTable->getUserByUsername($username);

        // since password fields match, see if the username
        // has already been registered - if it is then throw
        // and exception
        if ($user != null) {
            $errors['username'] = "Username already registered";
        }
    }
    
    if (!empty($errors)) {
        throw new Exception("There were errors. Please fix them.");
    }
    
    // since the username is not aleady registered, create
    // a new User object, add it to the database using the
    // UserTable object, and store it in the session array
    // using the key 'user'
    $user = new User(null, $username, $password, "user");
    $id = $userTable->insert($user);
    $user->setId($id);
    $_SESSION['user'] = $user;
    
    // now the user is registered and logged in so redirect
    // them the their home page
    // Note the user is redirected to home.php rather than
    // requiring the home.php script at this point - this 
    // ensures that if the user refreshes the home page they
    // will not be resubmitting the login form.
    // 
    // require 'home.php';
    header('Location: index.php');
}
catch (Exception $ex) {
    // if an exception occurs then extract the message
    // from the exception and send the user the
    // registration form
    $errorMessage = $ex->getMessage();
    require 'register_form.php';
}
?>
