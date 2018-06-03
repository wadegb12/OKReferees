$( document ).ready(function() {
    $(".loginLink").click(function() {
        $("#modal, .popup-content").addClass("active");
    });

    $(".logoutLink").click(function() {
        window.location.replace('/../index.php');
    });

    $(".close").click(function() {
        $("#modal, .popup-content").removeClass("active");
    });

    

});
