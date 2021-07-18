function validation(){
    var form = document.getElementById("formm");
    var email = document.getElementById("emailto").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email.match(pattern)){

        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "El email es valido";
        text.style.color = "#8ED081";
      

    }else{
        form.classList.remove("valid");
        form.classList.add("valid");
        text.innerHTML = "El email no es valido";
        text.style.color = "DF2935";
        
    }
}