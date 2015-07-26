<?php
/**
* functions.php contains the functions called in login.php
*
* @package A10
* @author Mandy Foster
* @version 1.0 2015/07/25
* @link http://mandy.originalfeelgood.com/summer-2015/itc260/a10/  
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see login.php
* @see index.php
* @todo none
*/


/**
* showLogin is called in login.php, and is used to show the password form in response to logic in login.php.
*
* @param $notice is a string and is used to display a different login error message
* @return void
* @todo none
*/

function showLogin($notice)
{
    echo '
    <!doctype html>
    <html>
        <head>
            <title>A10: Passphrase</title>
            <meta charset="UTF-8">
            <meta name="robots" content="noindex,nofollow">
        </head>
        <body>
            <h2>A10: Passphrase Login</h2>
            
            <form action="'.THIS_PAGE.'" method="post" name="myLogin">
            <label>Password</label><input type="text" name="password" id="password"/><br>
            <input type="submit" name="submit" value="Submit"/>
            </form><br/>
            <p>'.$notice.'</p>
        </body>
    </html>
    ';
}

?>