<?php
    
    class Kernal {
      public $kernalRoute;

      public function run() {
        global $routes;

        foreach($routes as $route) {
          $route->getActiveRoute( function($route) {
            $this->setKernalRoute($route);
            $this->SendToController();
          });
        }
        
        $this->dieOnInvalidRoute();
      }

      private function dieOnInvalidRoute() {
        if(is_null($this->kernalRoute)) {
          die( 'Invalid route.' );
        }
      }

      private function SendToController() {
        $this->includeController();
        $this->redirectToController();
        
        return true;
      }

      private function redirectToController() {
        $controller = $this->kernalRoute->getController();
        $action = $this->kernalRoute->getAction();
        $view = $this->kernalRoute->getView();

        $redirectToController = new $controller();
        $redirectToController->$action($view);
      }

      private function includeController() {
        require_once("./Bundle/Controllers/" . $this->kernalRoute->getController() . ".php");
      }

      private function setKernalRoute($route) {
        $this->kernalRoute = $route;
      }
      
        
    }