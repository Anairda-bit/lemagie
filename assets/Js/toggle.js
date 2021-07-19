function toggleMenu(){
    //funcion que agrega la clase "active" a la clase toggle y navigation    
    var menuToggle = document.querySelector('.toggle');
    var navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active')
    navigation.classList.toggle('active')
}