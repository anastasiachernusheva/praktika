<div class="container">
            <div class="row">
              <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <h1 class="zag">Городской портал</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/sl1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/sl2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/sl3.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
   
                <h2 class="zag1" id="onas">Сделаем город лучше!</h2>

                <div class="col-lg-1"> </div>

                </div>
    </section>  

<section class="sect">
        <div class="container">

        <div class="row">
            <div class="col-lg-12" >
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php

foreach($zayavki as $row) {
echo'  <div class="col">
    <div class="card">   
    <img src="img/'.$row['photo_p'].'" class="card-img-top photo_p" alt="..." id="photo_p'.$row['id_zayavki'].'" width="250px"   height="400px">
    <img src="img/'.$row['photo_d'].'" class="card-img-top photo_d" alt="..." id="photo_d'.$row['id_zayavki'].'" width="250px"   height="400px">
      <div class="card-body">
        <h5 class="card-title">'.$row['name'].'</h5>
        <p class="card-text">'.mb_substr($row['discription'],0,200).'</p>
        <p class="card-text">Дата подачи:'.$row['date_start'].'</p>
        <p class="card-text">Дата выполнения:'.$row['date_end'].'</p>
        <p class="card-text">Автор: '.$row['fio'].'</p>
      </div>
    </div>
  </div>';
}
?>         
</div>
            </div>
        </div>
      
    </div>
</section>
<div class="container">
<div class="row"> 
<div class="col-12">      
   <h2  class="zag1">Помоги своему городу стать лучше!</h2>
                <h3  class="zag1">Сообщи нам о проблеме, мы постараемся ее решить как можно быстрее!</h3>

                
  
    <div class="zayav">

    <div class="d-grid gap-2 col-6 mx-auto">
    <button type="button" class="btn btn-outline-primary" >     <a class="nav-link login-button"  href="main/avtorizaciya">Отправить заявку</a></button>

</div>
        </div>
      </div> 
    
</div>
</div>
</div>
</section>
