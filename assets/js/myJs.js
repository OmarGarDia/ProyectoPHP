function validaLogin() {
    event.preventDefault();
    interruptor = 0;

    user = document.getElementById("user").value.trim();
    if (user == "") {
        document.getElementById("user_error").innerHTML = "El correo es obligatorio";
        document.getElementById("login_error").innerHTML = "";
        interruptor = 1;
    }
    else {

        document.getElementById("user_error").innerHTML = "";

    }

    pass = document.getElementById("passwordLogin").value.trim();
    if (pass == "") {
        document.getElementById("passwordLogin_error").innerHTML = "La contraseña es obligatoria";
        document.getElementById("login_error").innerHTML = "";
        interruptor = 1;
    }
    else {
        document.getElementById("passwordLogin_error").innerHTML = "";
    }

    if (interruptor == 0) {
        // -------------------- EJECUCION DE UN ARCHIVO PHP PARA HACE RUNA CONSULTA A LA BASE DE DATOS -----------------------------
        // -------------------- Consulta para comprobar la disponibilidad del correo y del dni -----------------------------------------------


        var xmlhttp = getXMLHTTPRequest();
        var url = "views/js/scripts/validaLogin.php";
        // se abre la conexión con el servidor
        xmlhttp.open("POST", url);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = respuestaServidor;
        xmlhttp.send("email=" + user + "&password=" + passjs);

        function respuestaServidor() {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {

                    if (xmlhttp.responseText == "0") {
                        document.getElementById("formLogin").submit();
                        document.getElementById("login_error").innerHTML = "";

                        //  alert(xmlhttp.responseText);

                    }
                    else {
                        document.getElementById("login_error").innerHTML = "Correo y/o contraseña incorrectos";
                        // alert(xmlhttp.responseText);
                        // 

                    }
                    // document.getElementById("email_error").innerHTML=xmlhttp.responseText;
                }
                else {
                    // mandamos una alerta con el mensaje de error
                    alert(xmlhttp.statusText);
                }
            }

        }

    }


}