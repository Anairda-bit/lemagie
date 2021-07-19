function validation(){ 
    // funcion para validar el email

    var form = document.getElementById("formm");
    var email = document.getElementById("emailto").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //expresion regular para comprobar que exista texto + arroba+ texto + . + 2 o 3 caracteres

    if(email.match(pattern)){//comprobamos que el email ingresado sea valido

        // en caso de serlo agregamos la clase valid y removemos la clase invalid (en caso de tenerla)
        // con el innerHTML mandamos el mensaje de que el email es valido
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "El email es valido";
        text.style.color = "#8ED081";
      

    }else{
        // en caso no de serlo agregamos la clase invalid y removemos la clase valid (en caso de tenerla)
        // con el innerHTML mandamos el mensaje de que el email no es valido
        form.classList.remove("valid");
        form.classList.add("valid");
        text.innerHTML = "El email no es valido";
        text.style.color = "DF2935";
        
    }
}