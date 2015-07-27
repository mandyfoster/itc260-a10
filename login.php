<?php
/**
* login.php holds the logic and is included in index.php, requires functions.php; 
*
* login.php holds the logic for our password entry. if the password entered matches the $PASSWORD defined, then the session is set to that variable and the user can see index.php. If there is no session set, then the index remains hidden and the user must enter the password.
*
* @package A10
* @author Mandy Foster
* @version 1.0 2015/07/26
* @link http://mandy.originalfeelgood.com/summer-2015/itc260/a10/  
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see index.php
* @see functions.php
* @todo none
*/

# starts our session
session_start();

# defines path for the code
$path = '/summer-2015/itc260/a10/index.php';

# defines a constant for THIS_PAGE, used with functions.php for form action
define(THIS_PAGE,basename($path));

# functions.php is required since it holds the showLogin() function used to show the user the login form depending on whether or not the session has been successfully set
require 'functions.php';

# our defined password that must be entered correctly to show index.php
$PASSWORD = 'abc123';

# checks to see if the form has been submitted
if(isset($_POST['submit'])){
    if($_POST['password'] == $PASSWORD)
    {# if the password input is equal to our predefined password, set session variable to the password
        $_SESSION['loggedIn'] = $PASSWORD;
    }else
    {# password that was entered is not correct, show form again
        $notice = "I'm sorry, I don't think that is correct.";
        echo showLogin($notice);
        
        # dont show index
        die();
    }
}


# checks to see if the session variable has not been set, if it has not, change notice message and show the user the login form
if(!isset($_SESSION['loggedIn'])){

    $notice ="Welcome, what's the password?";
    echo showLogin($notice);

    # dont show index
    die();
}


?>
