<div class="container">
<div class="row">
<div class="col-3"></div>
<div class="col-6">
    <div class="applic">
    <h2>Подтвердить выполнение заявки </h2>
        <div class="card">
<form method="POST" action="/applic/ins_conf" role="form" class="form-inline" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="photo_p" class="form-label">Добавить фото результата работы</label>
            <div class="col-sm-10">
            <input type="hidden" name="id_zayavki" value="<?=$id_zayavki?>" />
<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
<input type="file" class="form-control" id="photo_p" name = 'photo_p' accept="img/*" required>  
</div>
        </div>

        <div class="mb-3">
        <label for="date_end" class="form-label">Добавить дату выполнениия работы</label>
                            <input type="date" class="form-control " id="              <td>'.$row['name_category'].'</td>" name="date_end">
    
    </div>

        <button type="submit" class="btn btn-primary" href ="applic/stutustwo"> Подтвердить</button>
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
