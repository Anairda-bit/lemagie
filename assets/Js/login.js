const signInBtn = document.querySelector('.signInBtn');
const signUpBtn = document.querySelector('.signUpBtn');
const formBx = document.querySelector('.formBx');
const body = document.querySelector('body');
const container = document.querySelector('#container');

function btnSliderOn(){
    
    formBx.classList.add('active')
    body.classList.add('active')
    container.classList.add('withRegister')
}

function btnSliderOff(){
    formBx.classList.remove('active')
    body.classList.remove('active')
    container.classList.remove('withRegister')
}