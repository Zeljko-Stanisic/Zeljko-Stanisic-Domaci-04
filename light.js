function changeBgSwitch() {
    var range = document.getElementById('second').value;
    if (document.getElementById('switch').checked == true){

        document.body.style.backgroundColor = 'rgb(' + range + ',' + range + ',' + range + ')';
    }else if (document.getElementById('switch').checked == false){
        range = 255 - range;
        document.body.style.backgroundColor = 'rgb(' + range + ',' + range + ',' + range + ')';
    }
}

