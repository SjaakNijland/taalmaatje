
<?php

include 'header.php';

$current_page = isset($_GET['action'])?$_GET['action']:'register';

switch ($current_page) {

    case 'chat':
        include 'views/chat.php';
    break;

    case 'register':
        include 'views/adduser.php';

        break;
        case 'dashboard':
        include 'views/login.html';

        break;


}

include 'footer.php';

?>
