$(document).ready(function(){
  document.getElementById("reg").disabled = !("sogl".checked);

    $("#pas").blur(function(){
        var p1 = document.getElementById("pass").value;
        var p2 = document.getElementById("pas").value;
        if (p1!=p2){
      //      alert('Пароли не совпадают');
      document.getElementById('err').innerHTML = "Пароли не совпадают";
      
      document.getElementById("reg") ;
    }

    });
    $("#sogl").click(function(){
        document.getElementById("reg").disabled = !(this.checked);
    });
    $("#reg").click(function(){
      var fio = document.getElementById("fio").value;
      var email = document.getElementById("email").value;      
      var login = document.getElementById("login").value;
      var pass = document.getElementById("pass").value;
      var pas = document.getElementById("pas").value;

    $.ajax({
      type: 'POST',
      url:'main/ins_user',
      data: ({fio: fio, email: email, login: login, pass: pass, pas:pas}),
      dataType: 'html',
      success: function(result) {
      $("#mass").html(result);

      }

    });     





    });
  });