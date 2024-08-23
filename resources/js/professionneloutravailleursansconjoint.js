
var nom=document.getElementById('age')
var errorNom=document.getElementById('errorAge')

var mode=document.querySelector('.mode')
var html=document.querySelector('html')

var form=document.querySelector('form')

form.addEventListener('submit',function(e){
    e.preventDefault()


    if (age.value=='') {
        age.classList.add('is-invalid')
        errorAge.textContent='Ce champ est obligatoire'
    } else{
        age.classList.remove('is-invalid')
        age.classList.add('is-valid')
        errorAge.textContent=''
    }

});

$(document).ready(function () {
    $('.content').hide();
    $('.alert-secondary').hide();
  
    $('.next').submit(function (e) { 
        e.preventDefault();
       
      
        if ('') {
          $('.alert-secondary').show(); 
        }
    });
  });

