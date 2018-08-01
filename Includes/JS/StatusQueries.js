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

    $('#submitReferee').click(function() {
        $('[name="refereeDisplayed"]').text("");

        var refereeName = $('[name="refereeName"]').val();
        var refereeGrade = $('[name="refereeGrade"]').val();

        if(isValidRefereeInfo(refereeName, refereeGrade))
        {
            $.ajax({
                url: "addReferee",
                type: "POST",
                dataType: 'JSON',
                data: {refereeName : refereeName, refereeGrade : refereeGrade},
                success: function(result) {
                    if(result.status) {
                        $('.addRefereeErrorMsg').text('');
                        $("#addRefereeModal").removeClass("active");
                        // var table = $('#status_table').dataTable(); 
                        // table.ajax.api().reload();
                    }
                    else {
                        editErrorMsg('addRefereeErrorMsg', result.errorMessage);
                    }
                }
              });
        }
        else {
            editErrorMsg('addRefereeErrorMsg', 'Please enter a valid referee and grade');
        }  
    });
    
    $('#lookUpRefereeBtn').click(function() {
        var refereeName = $('[name="searchRefereeName"]').val();

        $.ajax({
            url: "lookupReferee",
            type: "POST",
            dataType: 'JSON',
            data: {refereeName : refereeName},
            success: function(result) {
                if(result.status) {
                    $('.addRefereeErrorMsg').text('');
                    $('.lookupRefereeErrorMsg').text('');
                    $("#addRefereeModal").removeClass("active");
                    $("#editRefereeModal").addClass("active");
                    $('#addAssessmentHTML').hide();
                    $('[name="refereeDisplayed"]').text(refereeName);
                    showRefereeInfo(result.targetReferee);
                }
                else {
                    editErrorMsg('lookupRefereeErrorMsg', result.errorMessage);
                }
            }
          });
    });

    $('#updateRefereeBtn').click(function() {
        var refereeName = $('[name="refereeDisplayed"]').text();
        var writtenTestScore = $('input[name="writtenTestScore"]').val();
        var fitnessTest = $('[name="fitnessTest"]');
        var gameLog = $('[name="gameLog"]');

        // console.log("Name: " + refereeName);
        // console.log("writtenTestScore: " + writtenTestScore);
        // console.log("fitnessTest: " + fitnessTest.is(":checked"));
        // console.log("gameLog: " + gameLog.is(":checked"));
    });

    $('#submitAssessmentBtn').click(function() {
        var refereeName = $('[name="refereeDisplayed"]').text();
        var type = $('input[name="assessmentType"]').val();
        var assessor = $('[name="assessor"]').val();
        var assessmentScore = $('[name="assessmentScore"]').val();
        var assessmentPosition = $('[name="assessmentPosition"]').val();

        // console.log("Name: " + refereeName);
        // console.log("type: " + type);
        // console.log("assessor: " + assessor);
        // console.log("assessmentScore: " + assessmentScore);
        // console.log("assessmentPosition: " + assessmentPosition);
    });

    
    
} );

function showRefereeInfo(refereeData) {

}

function isValidRefereeInfo(refereeName, refereeGrade) {
    return refereeGrade.trim().length <= 2 && refereeGrade.trim().length >= 1 && refereeName.trim().length > 1;
}

function editErrorMsg(classToEdit, message) {
    $('.' + classToEdit).text(message);
    $('.' + classToEdit).css('color', 'red');
}