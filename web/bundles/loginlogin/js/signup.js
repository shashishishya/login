/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//firstname

function formValidation(){
    var firstname = document.sigup.firstname.value;
    var lastname  = document.sigup.lastname.value;
    var username  = document.sigup.username.value;
    var password  = document.sigup.password.value;
    var email     = document.sigup.email.value;
    
    if(firstname == ""){
        //alert("first name missing");
        //signup.firstname.style.background = 'Yellow';
        document.getElementById('firstname').style.background = 'Red';
        return false;
    }
    else{
        document.getElementById('firstname').style.background = 'green';
        return true;
    }
    if(lastname == ""){
        document.getElementById('lastname').style.background  = 'Red';
        return false;
    }
}

