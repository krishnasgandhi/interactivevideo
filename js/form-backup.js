$(document).ready(function () {
//services form
    $("form[name='services-form']").validate({
        rules: {
            "services[]": "required",
        },
        errorPlacement: function (error) {
            error.appendTo($("#services_error"));
        },
        messages: {
            "services[]": "Please select at least one service",
        },
        submitHandler: function (form) {
            playPause();
        }
    });

//budget form
    $("#budgetButton").click(function () {
        if ($("#amount").val() == 0) {

            $("#budget_error").html('Please select your budget');
        } else {
            $("#budget_error").html('');
            playPause();
        }
    });

//user details form
    $("form[name='user-details']").validate({
        rules: {
            name: "required",
            phone: "required",
            email: "required",
        },
        messages: {
            name: "Enter name",
            phone: "Enter phone number",
            email: "Enter email id",
        },
        submitHandler: function (form) {
            playPause();
            sendUserDetails();
        }
    });

//send user details to mail and database
    function sendUserDetails() {
        var industry = $("input[name='industry']:checked").val();

        var services = [];
        $(':checkbox:checked').each(function (i) {
            services[i] = $(this).val();
        });

        var budget = $("#amount").val();

        var urgent = $("input[name='urgent']:checked").val();

        var name = $("#name").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var message = $("#message").val();

        $.ajax({
            url: "http://demo33.blink-interact.com/interactivevideo/userdetails.php",
            type: "POST",
            data: {industry: industry, services: services, budget: budget, urgent: urgent, name: name, phone: phone, email: email, message: message},
            success: function (data) {
                console.log(data);
            }
        });
    }
});