
<?php 
    require_once('./Bundle/Classes/Kernal.php');
    require_once('./Bundle/Classes/Route.php');
    require_once('./Setup/Globals.php');
    require_once('./Setup/Routes.php');
    require_once('./Bundle/Controllers/AbstractController.php');

    $kernal = new Kernal();
    $kernal->run();