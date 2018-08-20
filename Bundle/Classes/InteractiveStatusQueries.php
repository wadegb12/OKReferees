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
            $html =  $this->getAddRefereeBtn();
            $html .= $this->getAddRefereeModalHTML();
            $html .= $this->getLookUpRefereeBtnHTML();
            $html .= $this->getEditRefereeModalHTML();

            return $html; 
        }

        private function getAddRefereeBtn()
        {
            ob_start(); ?>

            <div class="linePadding">
                <div class="inline"> Add Referee </div>
                <i id="addRefereeBtn" class = "material-icons inline inlinePositon">add_box</i>
            </div>

            <?php return ob_get_clean(); 
        }

        private function getAddRefereeModalHTML()
        {
            ob_start(); ?>

            <div id='addRefereeModal' class='modal'>
                <div class='modal-content'> 
                    <span class="close">&times;</span>
                    <div class="linePadding">
                        <div class="refereeModalText"> Add Referee </div>
                        <div class="inline "> Name: </div>
                        <div class="textInputBoxSize inline"> 
                            <input name="refereeName" type="text"> 
                        </div>
                        <div class="inline "> Grade: </div>
                        <input class="numberInputBoxSize inline" name="refereeGrade"> 
                        <div class="linePadding addRefereeErrorMsg"> </div>
                        <div class="center">
                            <a id="submitReferee" class="btn"> Add Referee</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php return ob_get_clean(); 
        }

        private function getLookUpRefereeBtnHTML()
        {
            ob_start(); ?>

            <div id="lookUpReferee">
                <div class="linePadding">
                    <div class="inline"> Search: </div>
                    <input class="textInputBoxSize inline" name="searchRefereeName">
                    
                    <a id="lookUpRefereeBtn" class="btn inline"> Look Up</a>
                </div>
                <div class="lookupRefereeErrorMsg"> </div>
            </div>

            <?php return ob_get_clean(); 
        }

        private function getEditRefereeModalHTML()
        {
            ob_start(); ?>

            <div id='editRefereeModal' class='modal'>
                <div class='modal-content'> 
                    <span class="close">&times;</span>
                    <div id="updateRefereeHTML">
                        <div class="refereeModalText linePadding"> Edit Referee </div>
                        <div name="refereeDisplayed" class="bold">  </div>

                        <div class="linePadding">
                            <div class="inline "> Grade: </div>
                            <input class="numberInputBoxSize inline" name="updateRefereeGrade"> 
                            <div class="inline"> Written Test: </div>
                            <input class="numberInputBoxSize inline" name="writtenTestScore"> 
                        </div>

                        <div class="linePadding">
                            <span class="inline"> Fitness Test: </span>
                            <input name="fitnessTest" type="checkbox" class="filled-in inline "/>
                            <span class="inline"> Game Log: </span>
                            <input name="gameLog" type="checkbox" class="filled-in inline"/>
                        </div>

                        <div class="linePadding">
                            <a id="updateRefereeBtn" class="btn inline"> Update Referee</a>
                        </div>

                        <div class="linePadding">
                            <div class="inline"> Add Assessment </div>
                            <i id="addAssessmentBtn" class = "material-icons inline inlinePositon">add_box</i>
                        </div>
                    </div>
                
                    <div id="addAssessmentHTML">
                        <div class="linePadding">
                            <label>
                                <input value="0" name="assessmentType" type="radio" />
                                <span class="radioButtonText">Maintenance</span>
                            </label>
                            <br>
                            <label>
                                <input value="1" name="assessmentType" type="radio" />
                                <span class="radioButtonText">Upgrade</span>
                            </label>
                        </div>

                        <div class="linePadding">
                            <div class="inline"> Score: </div>
                            <input class="numberInputBoxSize inline" name="assessmentScore">
                            
                            <div class="inline"> Assessor: </div>
                            <input class="textInputBoxSize inline" name="assessor">

                            <div class="inline"> Position: </div>
                            <input class="textInputBoxSize inline" name="assessmentPosition">
                            
                            <a id="submitAssessmentBtn" class="btn inline"> Add Assessment</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php return ob_get_clean(); 
        }

       
    }