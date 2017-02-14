$(document).on('ready', function () {

$("#loginForm").submit(function(event){
    event.preventDefault();
    $.ajax({

    url : $(this).attr('action'),
    type : 'POST',
    dataType : 'json',
    data:$(this).serialize(),

   success : function(reponse){

    if(reponse.hasOwnProperty('user')) {
    $('#signIn').modal('hide');
    if(document.getElementById("alertMsg2")!=null) {
       document.querySelector('body').removeChild(document.getElementById("alertMsg2"));
    }
   
    document.getElementById("alertMsg").classList.remove('hide');
    document.getElementById("alertMsg").classList.add('alert-'+reponse.type);
    document.getElementById("alertMsg").innerHTML = reponse.msg;
    var nav = document.querySelector('ul.nav').innerHTML='';
    document.querySelector('ul.nav').innerHTML='<li><a href="#">'+reponse.user+'</a></li>';
    document.querySelector('ul.nav').innerHTML+='<li><a href="/cook-mix/public/Users/logout">Déconnexion</a></li>';
    }

    else {
    document.getElementById("signInModalAlertMsg").classList.remove('hide');
    document.getElementById("signInModalAlertMsg").classList.add('alert-'+reponse.type);
    document.getElementById("signInModalAlertMsg").innerHTML = reponse.msg;   
    }
  
   },


   error : function(reponse, statut, erreur){

   },

   complete : function(reponse, statut){


   }


}); // FIN REQUETE AJAX LOGIN

   

}); // FIN SUBMIT LOGIN







$("#signupForm").submit(function(event){

    event.preventDefault();
    $.ajax({

    url : $(this).attr('action'),
    type : 'POST',
    dataType : 'json',
    data:$(this).serialize(),

   success : function(reponse){

    if(reponse.type=='success') {
    $('#signUp').modal('hide');
    document.getElementById("alertMsg").classList.remove('hide');
    document.getElementById("alertMsg").classList.add('alert-'+reponse.type);
    document.getElementById("alertMsg").innerHTML = reponse.msg;
     if(document.getElementById("alertMsg2")!=null) {
       document.querySelector('body').removeChild(document.getElementById("alertMsg2"));
    };
    // Presenter le modal login
    }

    else {
    document.getElementById("signUpModalAlertMsg").classList.remove('hide');
    document.getElementById("signUpModalAlertMsg").classList.add('alert-'+reponse.type);
    document.getElementById("signUpModalAlertMsg").innerHTML = reponse.msg;   
    }
  
   },


   error : function(reponse, statut, erreur){

   },

   complete : function(reponse, statut){


   }


}); // FIN REQUETE AJAX LOGIN

   

}); // FIN SUBMIT LOGIN







});
