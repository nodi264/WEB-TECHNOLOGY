function isValid(){
    var username = document.forms['LForm']['username'].value;
    var password = document.forms['LForm']['password'].value;
    var rule = document.forms['LForm']['rule'].value;
   
    if(username === ""){
    document.getElementById('usernamejsE').innerHTML = "*username empty";
    
    }
    if(password === ""){
    document.getElementById('passwordjsE').innerHTML = "*password empty";
    return false;
    }

    else{
        return true;
    }
    
    }