function validate(){

    // declaramos las variables

    var pwr = document.getElementById("pwr").value;
    var mensaje = document.getElementById("mensaje");
    var form = document.getElementById("formm");
    
        if(pwr.length ===8) //comprobamos que la contraseña sea igual a 8 caracteres
        {
            form.classList.add("valid"); //añadimos la clase valid
            form.classList.remove("invalid"); //retiramos la clase invalid en caso de que la tenga
            // enviamos el mensaje de que la contraseña no puede ser mayor a 8 caracteres
            mensaje.innerHTML = "La contraseña no puede ser mayor a 8 caracteres"; 
            mensaje.style.color = "DF2935";
        
    }else{
        form.classList.remove("valid"); //retiramos la clase valid
        form.classList.add("invalid"); //añadimos la clase invalid
        //enviamos el mensaje de que la contraseña debe medir 8 caracteres
        mensaje.innerHTML = "La contraseña debe medir 8 caracteres";
        mensaje.style.color = "#0d020fff";
        
    }
        
               
    }

