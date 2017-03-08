<?php

$email = $_REQUEST['email'];

mail('d.bushkanets@gmail.com', 'Email Sign Up', "Email: {$email}");

return 'sucess';
