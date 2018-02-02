
<?php

/*** begin our session ***/
    session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['firstname'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}


/*** check the username is the correct length ***/
elseif (strlen( $_POST['firstname']) > 20 || strlen($_POST['firstname']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}


else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $phpro_username = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $phpro_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $phpro_password = sha1( $phpro_password );

    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = '14270.hosts.ma-cloud.nl';

    /*** mysql username ***/
    $mysql_username = 'iamuser';

    /*** mysql password ***/
    $mysql_password = 'iampassword';

    /*** database name ***/
    //$mysql_dbname = 'phpro_auth';
	$mysql_dbname = 'taalmaatje';

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
//        var_dump($dbh);
		/*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT phpro_user_id, firstname, password   FROM phpro_users 
                    WHERE firstname = :phpro_username AND password = :phpro_password ");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($user_id == false)
        {
            $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
            /*** set the session user_id variable ***/
            $_SESSION['user_id'] = $user_id;

            /*** tell the user we are logged in ***/
            $message = '



<div id="nav-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">

                        <ul class="buttons no-dots">
                            <li>
                                <a href="../?action=chat">
                                    <div class="icon ion-ios-videocam"></div>
                                    <span class="title">video chat</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="">
                                    <div class="icon ion-android-person"></div>
                                    <span class="title">profile</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="logout.php">
                                    <div class="icon ion-ios-gear"></div>
                                    <span class="title">Logout</span>
                                </a>
                            </li>
                        </ul>



                    </div>
                </div>
            </div>

         
         
         
         
         
         
         ';
            //debug
//            var_dump( $_SESSION['user_id']);



//            echo $user_id;
//            echo "
//<form action='gelukt.php' method='post'>
//
//
//
//<td><input type='hidden' class='textField' placeholder='Schoolname' name='id' value='$user_id' required></td>
//
//
//</form>
//" ;

        }


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
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