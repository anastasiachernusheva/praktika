<div class="container">

	<div class="row">
  <div class="col-lg-12">
  <h2>Управление категориями</h2>
  <table class="table">
			<tr>   <th>Категория</th>
      <th>Удаление </th>


			</tr>
      <?php
            foreach($cat as $row) {
              echo'<tr> <td>'.$row['name_category'].'</td>';
                    echo'<<td> <button type="button" class="btn btn-dark"><a href ="category/delete_category?id_category='.$row['id_category'].'"">Удалить</button>';  
                
                    echo  '</td>   
                    </tr>';   
        
        }

        ?>
            </table>
  </div>
          </div>	
        </div>
        <div class="container">
	<div class="row">
  <div class="col-lg-12">
  <h2>Добавление категории</h2>
  <div class="card">
<form method="POST" action="category/add_category" role="form" class="form-inline" enctype="multipart/form-data">
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Введите название категории</label>
            <input type="text" class="form-control" id="exampleInputEmail1"  required  name="name_category" aria-describedby="emailHelp" placeholder="">
        </div>
    
        <button type="botton" class="btn btn-primary">Добавить</button>
   
        </form>
        </div>
  </div>	
        </div>
        </div>	
        