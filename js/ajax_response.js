
$(document).ready(function() {
    $("#submitButton").click(function() { 
        var serializedData = $("#registrationForm").serialize();
        var request;
        request = $.ajax({
            url: "../../ajax.php",
            type: "post",
            data: serializedData,
			success: function(data){
        	$("#result_div").html(data);
    }

        });
 
        request.done(function(jqXHR, textStatus, response) {
            $("#result").html(response);
        });
 
        request.fail(function(jqXHR, textStatus, errorThrown) {
            $("#result").html('There is some error while submit');
            console.error(
                "The following error occurred: " +
                textStatus, errorThrown
            );
        });
 
        return false;
 
    });
});
