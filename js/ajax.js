$(document).ready(function(){
 
    $("#login").blur(function(){
        let login = document.getElementById("login").value;

        $.ajax({
            type:'POST',
            url:'test_login.php',
            data:({login: login}),
            dataType:'html',
            success: function(result){
                $("#mass").html(result);
            }
        })
    })
})
    