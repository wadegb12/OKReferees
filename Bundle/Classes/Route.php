<?php   
    class Route {
        public $route;
        public $controller;
        public $action;
        public $view;

        function __construct($route, $controller, $action, $view) {
            $this->route = $route;
            $this->controller = $controller;
            $this->action = $action;
            $this->view = $view;
        }

        public function getActiveRoute($function) {
            $uri = $_SERVER['REQUEST_URI'];
            $uri = self::removeTrailingSlash($uri);

            if($uri == $this->getRoute()) {
                $function->__invoke($this);
            }
        }

        private static function removeTrailingSlash($uri) {
            $lastChar = substr($uri, -1);
            if($lastChar != "/") {
                return $uri;
            }
            
           return substr($uri, 0, strlen($uri)-1); 
        }

        public function getRoute() {
            return $this->route;
        }

        public function getController() {
            return $this->controller;
        }

        public function getAction() {
            return $this->action;
        }

        public function getView() {
            return $this->view;
        }
        

    }