$(document).ready(function () { 

    $(".delete").click(function(){
        
        var newsId = $(this).attr('newsId');

        $.ajax({
            type: "POST",
            url: "Controller.php",
            data: {action: 'delete', id: newsId},
            success: function(response){
                alert("News " + newsId + " has been deleted.");
                location.reload();
            },   
            error: function(response) {
                alert("A system error has occured.");
            }
        });

    });

    $("#addNews").on( "submit", function( event ) {
        event.preventDefault();

        var title   = $("#title").val();
        var body    = $("#body").val();
        var comment = $("#comment").val();

        $.ajax({
            type: "POST",
            url: "Controller.php",
            data: {
                action: 'add', 
                title: title,
                body: body,
                comment: comment
            },
            success: function(response){
                alert("News has been added.");
                location.reload();
            },   
            error: function(response) {
                alert("A system error has occured.");
            }
        });

        return false;
    });
});