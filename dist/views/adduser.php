<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );
//debug
//var_dump($form_token);
/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<html>
<head>
    <title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="app.css">
</head>


<body id="template-register">

<div id="app">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <h1 class="welcome">I want to...</h1>

                <div class="pop">
                    <form id="form-register" action="./models/adduser_submit.php" method="post">


                        <div class="form-header">
                            <div class="radio selected">
                                <label>
                                    <input type="radio" name="optionsRadios" value="findTaalmaatje" checked>
                                    ...find a Taalmaatje
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="becomeTaalmaatje">
                                    ...become a Taalmaatje
                                </label>
                            </div>
                        </div>

                        <div class="form-body">
                            <div class="form-group">
                                <input type="firstname" class="form-control" name="firstname" placeholder="first name" >
                            </div>
                            <div class="form-group">
                                <input type="lastname" class="form-control" name="lastname" placeholder="last name">
                            </div>
                            <div class="form-group">
                                <!-- <input type="dateOfBirth" class="form-control" placeholder="date of birth"> -->
                                <select class="form-control" name="day">
                                    <option>day</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <select class="form-control" name="month">
                                    <option>month</option>
                                    <option>januari</option>
                                    <option>februari</option>
                                    <option>march</option>
                                </select>
                                <select class="form-control" name="year">
                                    <option>year</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="e-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="repeat password">
                            </div>

                            <input type="hidden" name="form_token"
                                   value="<?php echo $form_token; ?>" />
                            <input type="submit" value="&rarr; register" /><br>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/app.js"></script>

</body>
</body>
</html>