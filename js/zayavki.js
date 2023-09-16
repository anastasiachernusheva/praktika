    $(document).ready(function(){
$(".photo_d").css("display","none");
$(".photo_p").css("display","block");

$(".photo_p").mouseover(function()
{

    let id = '#'+this.getAttribute('id').replace('photo_p','photo_d');
      
     $(this).css("display","none");
    $(id).css("display","block");

 });

 $(".photo_d").mouseout(function()
 {
    let id ='#'+this.getAttribute('id').replace('photo_d','photo_p');
    $(id).css("display","block");
    $(this).css("display","none");

    });
});