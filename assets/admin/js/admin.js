// any CSS you import will output into a single css file (app.css in this case)
import '../css/admin.scss';

let $ = jQuery;

$( document ).ready(function() {
    $(".testbutton").on('click', function() {
        $.ajax({
            type : "GET",
            dataType : "json",
            url : wp.ajax.settings.url,
            data : {action: "test_ajax_admin"},
            success: function(response) {
                console.log(response)
            }
        });
    })
});



