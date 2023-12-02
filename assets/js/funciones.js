function frmLogin(e){
    e.preventDefault();
    const email = document.getElementById("loginEmail");
    const pass = document.getElementById("loginPassword");
    if(email.value == ""){
        pass.classList.remove("is-invalid");
        email.classList.add("is-invalid");
        email.focus();
    }else if(pass.value == ""){
        email.classList.remove("is-invalid");
        pass.classList.add("is-invalid");
        pass.focus();
    }else{
        const url = base_url + "Usuarios/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                const res = JSON.parse(this.responseText);
                console.log(this.responseText);
                if(res == "ok"){
                    window.location = base_url + "Usuarios";
                }
            }
        }
    }
}