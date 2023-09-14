<div class="container">

	<div class="row">
  <div class="col-lg-12" >
  <h2>Мои заявки</h2>
		<table class="table">
			<tr>   <th> Дата</th>
            <th>Название заявки</th>
				<th> Описание</th>
				<th>Категория</th>
                <th>Статус</th>
                <th>Удаление</th>

			</tr>
      <?php
            foreach($myapplic as $row) {
              echo'<tr> <td>'.$row['date_start'].'</td>
              <td>'.$row['name'].'</td>
            <td>'.$row['discription'].'</td> 
              <td>'.$row['name_category'].'</td>
                  <td>'.$row['status'].'</td>';
                  if( $row['status'] == "Новая"){
                    echo'<<td> <button type="button" class="btn btn-dark"><a href ="applic/delete_applic/'.$row['id_zayavki'].'"">Удалить</button>';  
                    }                 
                    echo  '</td>   
                    </tr>';   
        
        }

        ?>
            </table>
  </div>
          </div>	
        </div>