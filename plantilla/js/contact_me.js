// Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var nombre = $("input#name").val();
            var correo = $("input#email").val();
            var numero = $("input#phone").val();
            var mensaje = $("textarea#message").val();
            var firstName = nombre; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = nombre.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: 'consultas/insertarcontacto',
                type: "POST",
                data: {
                    nombre: nombre,
                    correo: correo,
                    numero: numero,
                    mensaje: mensaje
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Tu mensaje ha sido enviado exitosamente </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");

                    //add new elements to table
                    c0 = $("<td></td>").text($("#tabla-datos").children().length - 1),
                    c1 = $("<td></td>").text(nombre),
                    c2 = $("<td></td>").text(correo),
                    c3 = $("<td></td>").text(numero),
                    c4 = $("<td></td>").text(mensaje),
                    renglon = $("<tr></tr>").append(c0,c1,c2,c3,c4);
                    $('#tabla-datos').append(renglon);

                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", Parece que el servidor no está respondiendo, lamentamos los probelmas :(!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
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
$('#name').focus(function() {
    $('#success').html('');
});
