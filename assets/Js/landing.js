function imgSlider(anything){
    // funcion para cambiar las imagenes cuando se de click en ellas
    document.querySelector('.carta').src = anything;
}
function changeCircleColor(color){
    // funcion para cambiar el color del elemento circle 
    const circle = document.querySelector('.circle');
    circle.style.background = color;
}
