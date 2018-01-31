
<?php
include 'header.php';


$current_page = isset($_GET['action'])?$_GET['action']:'register';

switch ($current_page) {

    case 'chat':
        include 'header.php';
        include 'views/chat.php';
    break;

    case 'register':
        include 'views/adduser.php';

        break;
        case 'login':
            $login = 'login';
        include 'views/login.html';

        break;


}

include 'footer.php';

?>
