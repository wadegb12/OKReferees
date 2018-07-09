
<?php 
    require_once('./Bundle/Classes/Kernal.php');
    require_once('./Bundle/Classes/Route.php');
    require_once('./Bundle/Classes/Database.php');
    require_once('./Bundle/Classes/Queries.php');
    require_once('./Bundle/Classes/Table.php');
    require_once('./Bundle/Classes/Login.php');
    require_once('./Bundle/Classes/ExceptionHandler.php');
    require_once('./Bundle/Classes/InteractiveStatusQueries.php');

    require_once('./Setup/Globals.php');
    require_once('./Setup/Routes.php');
    require_once('./Bundle/Controllers/AbstractController.php');

    $kernal = new Kernal();
    $kernal->run();