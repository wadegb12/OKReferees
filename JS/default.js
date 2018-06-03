$( document ).ready(function() {
    $(".loginLink").click(function() {
        $("#modal").addClass("active");
    });

    $(".logoutLink").click(function() {
        window.location.replace('/../index.php');
    });

    $(".close").click(function() {
        $("#modal").removeClass("active");
    });

});
