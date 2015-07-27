<?php
/**
* index.php requires login.php, which requires functions.php; 
*
* index.php is only visible when the password entered matches the password
* defined in login.php, and if the session variable is set.
*
* @package A10
* @author Mandy Foster
* @version 1.0 2015/07/26
* @link http://mandy.originalfeelgood.com/summer-2015/itc260/a10/  
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see login.php
* @see functions.php
* @todo none
*/

require 'login.php';

echo '
<!doctype html>
<html>
    <head>
        <title>A10: Passphrase</title>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow">
    </head>
    <body>
        <h2>A10: Passphrase</h2>
        <p>Congrats! You are logged in.</p>
        <p>Alright, mission complete. You can go home now.</p>
    </body>
</html>
';

?>