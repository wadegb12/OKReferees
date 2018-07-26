$(document).ready( function () {
    $('.dropdown-trigger').dropdown();
    $('#addRefereeHTML').hide();
    $('#editRefereeHMTL').hide();

    $('#addRefereeBtn').click(function() {
        $("#addRefereeModal").addClass("active");
    });

    $('#addAssessmentBtn').click(function() {
        $('#addAssessmentHTML').toggle();
    });

    $('#lookUpRefereeBtn').click(function() {
        $("#editRefereeModal").addClass("active");
        $('#addAssessmentHTML').hide();
        
        var refereeName = $('[name="searchRefereeName"]').val();
        $('[name="refereeDisplayed"]').text(refereeName);
    });

    $('#submitReferee').click(function() {
        $('[name="refereeDisplayed"]').text("");
        $('#editRefereeHMTL').hide();

        var refereeName = $('[name="refereeName"]').val();
        var refereeGrade = $('[name="refereeGrade"]').val();

        console.log("Name: " + refereeName);
        console.log("Grade: " + refereeGrade);

        $("#addRefereeModal").removeClass("active");
    });

    $('#updateRefereeBtn').click(function() {
        var refereeName = $('[name="refereeDisplayed"]').text();
        var writtenTestScore = $('input[name="writtenTestScore"]').val();
        var fitnessTest = $('[name="fitnessTest"]');
        var gameLog = $('[name="gameLog"]');

        console.log("Name: " + refereeName);
        console.log("writtenTestScore: " + writtenTestScore);
        console.log("fitnessTest: " + fitnessTest.is(":checked"));
        console.log("gameLog: " + gameLog.is(":checked"));
    });

    $('#submitAssessmentBtn').click(function() {
        var refereeName = $('[name="refereeDisplayed"]').text();
        var type = $('input[name="assessmentType"]').val();
        var assessor = $('[name="assessor"]').val();
        var assessmentScore = $('[name="assessmentScore"]').val();
        var assessmentPosition = $('[name="assessmentPosition"]').val();

        console.log("Name: " + refereeName);
        console.log("type: " + type);
        console.log("assessor: " + assessor);
        console.log("assessmentScore: " + assessmentScore);
        console.log("assessmentPosition: " + assessmentPosition);
    });
    
} );