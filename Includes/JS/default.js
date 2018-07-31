$( document ).ready(function() {

    $(".loginLink").click(function() {
        $("#loginModal").addClass("active");
    });

    // $(".logoutLink").click(function() {
    //     window.location.replace('/../index.php');
    // });

    $(".close").click(function() {
        $("#loginModal").removeClass("active");
        $("#addRefereeModal").removeClass("active");
        $("#editRefereeModal").removeClass("active");
    });

});
