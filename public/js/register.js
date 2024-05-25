$(document).ready(function () {

    // Validación del formulario de registro
    $("#form-register").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 25
            },
            password2: {
                required: true,
                equalTo: "#password1"
            }
        },
        messages: {
            email: {
                required: "<b style='color:#F93810'>Por favor ingresa un correo electrónico válido.</b>",
                email: "Por favor ingresa un correo electrónico válido"
            },
            password: {
                required: "<b style='color:#F93810'>Por favor ingresa una contraseña válida.</b>",
                minlength: "<b style='color:#F93810'>Debe tener mínimo 8 caracteres.</b>",
                maxlength: "<b style='color:#F93810'>Máximo 25 caracteres.</b>"
            },
            password2: {
                required: "<b style='color:#F93810'>Por favor repita su contraseña.</b>",
                equalTo: "<b style='color:#F93810'>Las contraseñas no son iguales.</b>"
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".mb-3").append(error);
        },
        highlight: function (element, errorClass) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass("is-invalid");
        },
        submitHandler: function (form) {
            // Aquí puedes enviar el formulario si la validación es exitosa
            form.submit();
        }
    });

});