//funcion para monstar dentro de la etiqueta "p"
function informar(){
    document.getElementById("mensaje").innerText = "Comuniquese al 333-444";
}



function validar(){
    var user=document.getElementById("usuario").value; //llamo a las variables de los inputs
    var pass=document.getElementById("pass").value;

    switch (user.toUpperCase()){
        case "VISITANE":
            if(pass!='1234'){
                alert("Contraseña incorrecta");
            }
            else{
                window.location.href = "menu1.html"
            }
            break;
        case "COMPRADOR":
            if(pass!="5678"){
                alert("Contraseña Incorrecta")
            }
            else{
                location.href("menu2.html")
            }
            break;
        default:
            alert("Usuario no tiene acceso o no registrado")
    }
}
