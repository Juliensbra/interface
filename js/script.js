"use strict";



/*****************************modify_ficheClient.phtml**************************/


//fonction pour l'ajout de champ//


let button;
let formChamp;


//On cible les ID & CLASS

button = document.getElementById('bouton_form');

formChamp = document.getElementById('affiche');


//On ajoute un evenement

button.addEventListener('click', onClickDisplayForm);


//On créer les fonction

function onClickDisplayForm()
{

   	formChamp.classList.toggle('show');

}



/***************************** FORMULAIRE DE CONNEXION AJAX (LOGIN.PHP) **************************/


$(document).ready(function(){

  $('.formulaire').submit(function(){

    var username = $('.username').val();
    var password = $('.password').val();


    $.post('../admin/login.php', {username:username, password:password},function(donnees){

      $('.username').val('');
      $('.password').val('');
      
    });

    return false;
  });
  
});

































//REPRENDRE PAGE FAVORIS (forum.phpfrance.com) afin d'ajouter un champ
