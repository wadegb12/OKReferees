<?php

    class InteractiveStatusQueries {

        public $interactiveQueryHTML;

        public function __construct() {
            $this->interactiveQueryHTML = $this->createInteractiveQueryHTML();
        }

        public function getInteractiveQueryHTML() {
            return $this->interactiveQueryHTML;
        }

        public function createInteractiveQueryHTML() {
            ob_start(); ?>


            <div>
                <div class="linePadding">
                    <div class="inline"> Add Referee </div>
                    <i class = "material-icons inline inlinePositon">add_box</i>
                </div>

                <div class="linePadding">
                    <div class="inline"> Name: </div>
                    <input class="textInputBoxSize inline"> 
                    <a class="btn inline"> Add Referee</a>
                </div>
            </div>


            <div>
                <div class="linePadding">
                    <div class="inline"> Written Test: </div>
                    <input class="numberInputBoxSize inline"> 

                    <span class="inline"> Fitness Test: </span>
                    <input type="checkbox" class="filled-in inline" checked="checked"/>

                    <span class="inline"> Game Log: </span>
                    <input type="checkbox" class="filled-in inline" checked="checked"/>
                </div>


            
                <div class="linePadding">
                    <div class="inline"> Add Assessment </div>
                    <i class = "material-icons inline inlinePositon">add_box</i>
                </div>

                <div class="linePadding">
                    <div class="inline"> Assessor: </div>
                    <input class="textInputBoxSize inline">

                    <div class="inline"> Position: </div>
                    <input class="textInputBoxSize inline">
                </div>

                <div class="linePadding">
                    <ul id='type' class='dropdown-content'>
                        <li><div>Maintenance</div></li>
                        <li><div>Upgrade</div></li>
                    </ul>

                    <div class="inline"> Type: </div>
                    <a class='dropdown-trigger btn'data-target='type'>
                        <i class = "material-icons ">arrow_drop_down</i>
                    </a>
                    

                    <div class="inline"> Score: </div>
                    <input class="numberInputBoxSize inline">

                    <a class="btn inline"> Add Assessment</a>
                </div>
            </div>


            <?php return ob_get_clean(); 
        }
    }