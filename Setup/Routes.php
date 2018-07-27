<?php

    global $routes;

    $routesList = array(
        new Route('', 'HomeController', 'index'),
        new Route('/comingSoon' ,'ComingSoonController', 'index'),
        new Route('/home', 'HomeController', 'index'),
        new Route('/links', 'LinksController', 'index'),
        new Route('/srcContacts' ,'SRCContactsController', 'index'),
        new Route('/refereeStatus' ,'RefereeStatusController', 'index'),
        new Route('/addReferee' ,'RefereeStatusController', 'addRefereeAction'),
    );

    $routes = $routesList;
