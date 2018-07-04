<?php
    
    class Kernal {
      public $route;

      public function run() {
        global $routes;

        foreach($routes as $route) {
          $route->getActiveRoute( function($route) {
            $this->route = $route;
            $this->sendToController();
          });
        }
        
        $this->dieOnInvalidRoute();
      }

      private function sendToController() {
        $this->includeController();
        $this->redirectToController();
        
        return true;
      }

      private function includeController() {
        require_once("./Bundle/Controllers/" . $this->route->getController() . ".php");
      }

      private function redirectToController() {
        $controller = $this->route->getController();
        $action = $this->route->getAction();

        $redirectToController = new $controller();
        $redirectToController->$action();
      }

      private function dieOnInvalidRoute() {
        if(is_null($this->route)) {
          die( 'Invalid route.' );
        }
      }

    }