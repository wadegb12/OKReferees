$( document ).ready(function() {
    $("#login").click(function() {
        // debugger;
        // $.ajax({
        //     url: "/App/login.php",
        //     method: 'post',
        //     data: {user: 'ok', pass: 'test'},
        //     dataType: "JSON",
        //     success: function(response){
        //         console.log(response);
        //         // url = "/App/Home.php";
        //         // window.location.replace(url);
        //     }
        // });
    });

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
