<?php

    global $routes;

    $routesList = array(
        new Route('', 'HomeController', 'index', 'home'),
        new Route('/comingSoon' ,'ComingSoonController', 'index', 'comingSoon'),
        new Route('/home', 'HomeController', 'index', 'home'),
        new Route('/links', 'LinksController', 'index', 'links'),
        new Route('/srcContacts' ,'SRCContactsController', 'index', 'srcContacts'),
        new Route('/refereeStatus' ,'RefereeStatusController', 'index', 'refereeStatus')
    );

    $routes = $routesList;
