
<?php
        include 'menu.php';

$current_page = isset($_GET['action'])?$_GET['action']:'home';

switch ($current_page) {
    case 'home':
        
        include 'gallary.php';
        break;

}
?>