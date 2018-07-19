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


            <div class="linePadding">
                <div class="inline"> Add Referee </div>
                <i id="addRefereeBtn" class = "material-icons inline inlinePositon">add_box</i>
            </div>

            <div id="addRefereeHTML" class="linePadding">
                <div class="inline "> Name: </div>
                <input class="textInputBoxSize inline"> 
                <a class="btn inline"> Add Referee</a>
            </div>

            <div id="selectRefereeHTML">
                <div class="linePadding">
                    <div class="inline"> Search: </div>
                    <input class="textInputBoxSize inline">
                    

                    <a class="btn inline"> Look Up</a>
                </div>
            </div>

            <div id="updateRefereeHTML">
                <div class="linePadding">
                    <div class="inline"> Written Test: </div>
                    <input class="numberInputBoxSize inline"> 

                    <span class="inline"> Fitness Test: </span>
                    <input type="checkbox" class="filled-in inline " checked="checked"/>

                    <span class="inline"> Game Log: </span>
                    <input type="checkbox" class="filled-in inline" checked="checked"/>
                </div>

                <div class="linePadding">
                    <div class="inline"> Add Assessment </div>
                    <i id="addAssessmentBtn" class = "material-icons inline inlinePositon">add_box</i>
                </div>
            </div>

            <div id="addAssessmentHTML">
                <div class="linePadding">
                    <label>
                        <input name="assessmentType" type="radio" />
                        <span>Maintenance</span>
                    </label>
                    <br>
                    <label>
                        <input name="assessmentType" type="radio" />
                        <span>Upgrade</span>
                    </label>
                </div>

                <div class="linePadding">
                    <div class="inline"> Assessor: </div>
                    <input class="textInputBoxSize inline">

                    <div class="inline"> Score: </div>
                    <input class="numberInputBoxSize inline">
                </div>

                <div class="linePadding">
                    <div class="inline"> Position: </div>
                    <input class="textInputBoxSize inline">
                    

                    <a class="btn inline"> Add Assessment</a>
                </div>
            </div>


            <?php return ob_get_clean(); 
        }
    }