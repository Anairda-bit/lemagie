function validate(){
    var pwr = document.getElementById("pwr").value;
    var mensaje = document.getElementById("mensaje");
    var form = document.getElementById("formm");
    
        if(pwr.length >8)
        {

            form.classList.add("valid");
            form.classList.remove("invalid");
            mensaje.innerHTML = "La contraseña no puede ser mayor a 8 caracteres";
            mensaje.style.color = "DF2935";
        
    }else{
        form.classList.remove("valid");
        form.classList.add("invalid");
        mensaje.innerHTML = "La contraseña debe medir 8 caracteres";
        mensaje.style.color = "#0d020fff";
        mensaje.style.alignSelf ="center";
    }
        
               
    }

