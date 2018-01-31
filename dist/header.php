<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>taalmaatje</title>

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="css/app.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
<?php
  $current_page = $_GET['action'] ;
?>

</head>
<body id="<?php echo 'template-' . $current_page ?>" class="header-fixed">
    <div id="app">

        <header id="header">
            <a href="" class="nav-toggle profile-close icon icon-nav ion-navicon"></a>
            <a href="" class="profile-toggle nav-close icon icon-profile ion-android-person"></a>
        </header>

        <div id="nav-container">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">

                        <ul class="buttons no-dots">
                            <li>
                                <a href="?action=chat">
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
                                <a href="models/logout.php">
                                    <div class="icon ion-ios-gear"></div>
                                    <span class="title">logout</span>
                                </a>
                            </li>
                        </ul>



                    </div>
                </div>
            </div>

        </div>
