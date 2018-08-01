$(document).ready( function () {
    $('.dropdown-trigger').dropdown();
    $('#addRefereeHTML').hide();
    $('#editRefereeHMTL').hide();

    // $('#status_table_length').hide();

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

        var refereeName = $('[name="refereeName"]').val();
        var refereeGrade = $('[name="refereeGrade"]').val();

        // console.log("Name: " + refereeName);
        // console.log("Grade: " + refereeGrade);

        if(refereeGrade.length <= 2 && refereeName.length > 1)
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
                        $('.addRefereeErrorMsg').text(result.errorMessage);
                        $('.addRefereeErrorMsg').css('color', 'red');
                    }
                }
              });
        }
        else {
            $('.addRefereeErrorMsg').text('Please enter a valid referee and grade');
            $('.addRefereeErrorMsg').css('color', 'red');
        }
          
          
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