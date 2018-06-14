<?php
    class HomeController extends AbstractController {
        public function index($view) {
            $this->render($view);
            
        }
    }