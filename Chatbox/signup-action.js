function isValid(){
    var fname = document.forms['SForm']['fname'].value;
    var username = document.forms['SForm']['username'].value;
    var password = document.forms['SForm']['password'].value;
    var rule = document.forms['SForm']['rule'].value;
   
    if(fname === ""){
    document.getElementById('fnamejsE').innerHTML = "*Full  name empty";
    
    }
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