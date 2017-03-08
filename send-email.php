<?php

$email = $_REQUEST['email'];

mail('chronspire@gmail.com', 'Email Sign Up', "Email: {$email}");

return 'sucess';
