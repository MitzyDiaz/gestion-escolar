$().ready(function () {
  $("#formUsuario").validate({
    rules: {
      nombreUsuario: {
        OnlyLetters: true,
        required: true,
        minlength: 4,
        maxlength: 30,
      },
      paternoUsuario: {
        OnlyLetters: true,
        required: true,
        minlength: 4,
        maxlength: 30,
      },
      maternoUsuario: {
        OnlyLetters: true,
        required: true,
        minlength: 4,
        maxlength: 30,
      },
      rfcUsuario: {
        Alphanumeric: true,
        required: true,
        minlength: 18,
        maxlength: 24,
      },
      correoUsuario: {
        required: true,
        email: true,
        minlength: 8,
        maxlength: 40,
      },
      telefonoUsuario: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 14,
      },
      rolUsuario: {
        required: true
      }
    },
    messages: {
      nombreUsuario: {
        OnlyLetters: "Solo letras",
        required: "Campo obligatorio",
        minlength: "El nombre debe tener mínimo 4 letras",
        maxlength: "El nombre debe tener máximo 30 letras"
      },
      paternoUsuario: {
        OnlyLetters: "Solo letras",
        required: "Campo obligatorio",
        minlength: "El apellido debe tener mínimo 4 letras",
        maxlength: "El apellido debe tener máximo 30 letras"
      },
      maternoUsuario: {
        OnlyLetters: "Solo letras",
        required: "Campo obligatorio",
        minlength: "El apellido debe tener mínimo 4 letras",
        maxlength: "El apellido debe tener máximo 30 letras"
      },
      rfcUsuario: {
        Alphanumeric: "Solo caracteres alfanúmericos",
        required: "Campo obligatorio",
        minlength: "Mínimo 18 números",
        maxlength: "Máximo 24 números"
      },
      correoUsuario: {
        required: "Campo obligatorio",
        email: "Ingresa un correo electrónico válido",
        minlength: "Al menos 8 caracteres",
        maxlength: "Máximo 40 caracteres"
      },
      telefonoUsuario: {
        required: "Campo obligatorio",
        digits: "Solo números",
        minlength: "El teléfono debe tener mínimo 10 digitos",
        maxlength: "El teléfono debe tener máximo 14 digitos"
      },
      rolUsuario: {
        required: "Campo obligatorio"
      }
    },
    submitHandler: function (form) {
      var datos = $('#formUsuario').serialize();
      //console.log(datos);
      $.ajax({
        type: "POST",
        url: "CxWeb.php",
        dataType: "json",
        data: datos,
        success: function (response) {
          if (response.msg == "QueryComplete") {
            console.log("QueryUsuarioOk");
          } else if (response.msg == "UsuarioExiste") {
            console.log("Existe");
          } else {
            console.log("ERROR");
            console.log(response);
          }
        }
      });
      return false;
    }
  });
});
