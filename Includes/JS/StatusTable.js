$(document).ready( function () {
  $('#status_table').DataTable();
 
  $('.dropdown-trigger').dropdown();

  $('#addRefereeHTML').hide();
  $('#updateRefereeHTML').hide();
  // $('#addAssessmentHTML').hide();
 
  $('#addRefereeBtn').click(function() {
      $('#addRefereeHTML').toggle();
  });

  // $('#updateRefereeBtn').click(function() {
      // $('.updateRefereeHTML').toggle();
  // });

  $('#addAssessmentBtn').click(function() {
      $('#addAssessmentHTML').toggle();
  });



  
} );
