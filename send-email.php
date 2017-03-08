<?php

if (isset($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
} else {
    return;
}

mail('chronspire@gmail.com', 'Email Sign Up', "Email: {$email}");

return 'sucess';
