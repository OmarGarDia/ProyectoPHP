function frmLogin(e) {
    e.preventDefault();

    const email = document.getElementById("loginEmail").value;
    const pass = document.getElementById("loginPassword").value;

    if (email === "") {
        handleValidationError("Email no puede estar vacío", "loginEmail");
    } else if (pass === "") {
        handleValidationError("Contraseña no puede estar vacía", "loginPassword");
    } else {
        const url = base_url + "Usuarios/validar";
        const frm = new FormData(document.getElementById("frmLogin"));
        const http = new XMLHttpRequest();

        http.open("POST", url, true);
        http.send(frm);

        http.onreadystatechange = function () {
            if (http.readyState === 4) {
                if (http.status === 200) {
                    console.log(http.responseText);
                    try {
                        const res = JSON.parse(http.responseText);

                        if (res === "ok") {
                            window.location = base_url + "Usuarios";
                        } else {
                           document.getElementById("alerta").classList.remove("d-none");
                           document.getElementById("alerta").innerHTML = res;
                        }
                    } catch (error) {
                        console.error("Error al analizar la respuesta JSON:", error);
                    }
                } else {
                    console.error("Error en la solicitud:", http.status, http.statusText);
                }
            }
        };
    }
}

function handleValidationError(message, elementId) {
    const pass = document.getElementById("loginPassword");

    pass.classList.remove("is-invalid");
    document.getElementById(elementId).classList.add("is-invalid");
    pass.focus();

    console.error("Validación de formulario:", message);
}