
function checkFullName (){
    var fullName = document.getElementById ('fullname').value;
    if(fullName.length  < 6 || !fullName.includes(' ')){
        document.getElementById('error-name').innerHTML = 'Ime mora imati vise od 5 karaktera i razmak!';
        document.getElementById('error-name').style.visibility = 'visible';
        return false;
    }else {
        document.getElementById('error-name').style.visibility = 'hidden';
        return true;


    }
}  
function checkEmail() {
    var email = document.getElementById ('email').value;
    if(!email.includes('@', '.com')){
        document.getElementById('error-email').innerHTML = 'Email mora imati @ i .com!';
        document.getElementById('error-email').style.visibility = 'visible';
        return false;
    }else {
        document.getElementById('error-email').style.visibility = 'hidden';
        return true;
    }
}

function checkDate() {
    var date = document.getElementById ('date').value;
    if(date < 18){
        document.getElementById('error-date').innerHTML = 'Osoba mora imati vise od 18 godina!';
        document.getElementById('error-date').style.visibility = 'visible';
        return false;
    }else {
        document.getElementById('error-date').style.visibility = 'hidden';
        return true;
    }
}
function check(){
    if(checkFullName() && checkEmail() && checkDate()){
        document.getElementById ('submit-btn').disabled = false;
        alert('Validacija uspjesna!!!');
    }else {
        document.getElementById ('submit-btn').disabled = true;
        alert('Validacija nije uspjesna, pokusajte ponovo!!!');
    }
}

function end() {
    alert ("Ime:   " + document.getElementById('fullname').value + "\n" + "E-mail adresa:   " + document.getElementById("email").value + '\n' + 'Godina rodjenja:   ' + document.getElementById("date").value);
}





