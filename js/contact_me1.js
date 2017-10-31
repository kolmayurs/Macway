$(function() {

    $("#bookaride-form input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var bookaride = $("input#bookaride-option").val();
            var name = $("input#bookaride-name").val();
            var contact = $("input#bookaride-contact-number").val();
            var email = $("input#bookaride-email").val();
            var fromdate = $("input#bookaride-fromdate").val();
            var todate = $("textarea#bookaride-todate").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            $.ajax({
                url: "./mail/contact_me1.php",
                type: "POST",
                data: {
                    bookaride: bookaride,
                    name: name,
                    contact: contact,
                    email: email,
                    fromdate: fromdate,
                    todate: todate
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success1').html("<div class='alert alert-success'>");
                    $('#success1 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success1 > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success1 > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#bookaride-form').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success1').html("<div class='alert alert-danger'>");
                    $('#success1 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success1 > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success1 > .alert-danger').append('</div>');
                    //clear all fields
                    $('#bookaride-form').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name1').focus(function() {
    $('#success1').html('');
});
