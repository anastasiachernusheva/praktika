<div class="container">
<div class="row">
<div class="col-3"></div>
<div class="col-6">
    <div class="applic">
    <h2>Оставьте заявку </h2>
        <div class="card">
<form method="POST" action="/applic/add_applic" role="form" class="form-inline" enctype="multipart/form-data">
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Введите название<font color="red">*</font></label>
            <input type="text" class="form-control" id="exampleInputEmail1"  required  name="name" aria-describedby="emailHelp" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Введите описание<font color="red">*</font></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="discription"></textarea>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Выберите категорию</label>
          <select class="form-control" name="name_category" id="name_category">
          <?php
    foreach($cat as $row) {
      echo'   
      <option value="'.$row['id_category'].'">'.$row['name_category'].'</option>
';
      }
    ?>         </select>
        </div>
        <div id="mass"></div>        
        <div class="mb-3">
            <label for="photo_d" class="form-label">Добавьте фото<font color="red">*</font></label>
            <div class="col-sm-10">
<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
<input type="file" class="form-control" id="photo_d" name = 'photo_d' accept="img/*" required>  
</div>
        </div>
        <button type="submit" class="btn btn-primary">Оставить заявку</button>
        <p id="err" style="color:red"> </p>
        </form>
        </div>
        </div>
    </div>
</div>
</div>
<div class="col-3"></div>
</div>
</div>
</section>
