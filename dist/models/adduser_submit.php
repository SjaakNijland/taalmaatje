<?php
//bron
//http://www.phpro.org/tutorials/Basic-Login-Authentication-with-PHP-and-MySQL.html

/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['firstname'], $_POST['password'], $_POST['form_token']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Invalid form submission';
}

/*** check the password is the correct length ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}

else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $taalmaatje = filter_var($_POST['optionsRadios'], FILTER_SANITIZE_STRING);
    $day = filter_var($_POST['day'], FILTER_SANITIZE_STRING);
    $year = filter_var($_POST['year'], FILTER_SANITIZE_STRING);
    $month = filter_var($_POST['month'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

    $birthday = $day . '-' . $month . '-' . $year;

    /*** now we can encrypt the password ***/
    $password = sha1( $password );

    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = '';

    /*** database name ***/
  //  $mysql_dbname = 'phpro_auth';
	$mysql_dbname = 'ed';
    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
		var_dump( $dbh);
	   /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("INSERT INTO phpro_users (firstname, lastname, password, taalmaatje, birthday, email ) VALUES (:firstname, :lastname, :password, :taalmaatje, :birthday, :email)");

        /*** bind the parameters ***/
        $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);
        $stmt->bindParam(':taalmaatje', $taalmaatje, PDO::PARAM_STR);
        $stmt->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'New user added Click <a href="../?action=login">here</a> to login';


    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            $message = 'Username already exists';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
        }
    }
}
?>

<html>
<head>
    <title>PHPRO Login</title>
</head>
<body>
<p><?php echo $message; ?>
</body>
</html>