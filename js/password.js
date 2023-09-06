$(document).ready(function(){
    $("#pas").blur(function(){
        var p1 = document.getElementById("pass").value;
        var p2 = document.getElementById("pas").value;
        if (p1!=p2){
            alert('Пароли не совпадают');
        }
    });
});