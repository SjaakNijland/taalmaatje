
<?php

include 'header.php';

$current_page = isset($_GET['action'])?$_GET['action']:'chat';

switch ($current_page) {

    case 'chat':
        include 'views/chat.php';
    break;

}

include 'footer.php';

?>
